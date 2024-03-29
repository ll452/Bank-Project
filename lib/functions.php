<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizers.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");


//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/get_url.php");

require(__DIR__ . "/make_deposit.php");

require(__DIR__ . "/account_helpers.php");

require(__DIR__ . "/refresh_account_balance.php");

require(__DIR__ . "/make_withdraw.php");

require(__DIR__ . "/apy_helpers.php");

require(__DIR__ . "/redirect.php");

?>

<?php
function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

function makeTransfer($account_num, $amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $losing_id = get_user_account_number($losing);
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:acs1, :acd1, :bc, :r,:m, :et1), 
            (:acs2, :acd2, :bc2, :r, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":bc"] = ($amount * -1);
        $params[":et1"] = get_user_account_balance($losing_id) + ($amount * -1);

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = $amount;
        $params[":et2"] = get_user_account_balance($account_num) + $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Transfer Made", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering money", "danger");
        }
    }
}

function setProfileName ($fname, $lname)
{
    $query = "UPDATE Users set firstname = :fn, lastname = :ln WHERE id = :id";
    $params[":id"] = get_user_id();
    $params[":fn"] = $fname;
    $params[":ln"] = $lname;
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        flash("Profile Name Set", "Success");
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("There was an error setting profile name", "danger");
    }

}

function setVisibility($choice)
{
    $query = "UPDATE Users set public = :c WHERE id = :id";
    $params[":id"] = get_user_id();
    $params[":c"] = $choice;
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        flash("Profile Visibility Updated", "Success");
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("There was an error changing profile visibility", "danger");
    }

}

function getVisibility($id)
{
    $query = "SELECT Public from Users WHERE id = :id";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return se($r, "Public", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching profile visibility: " . var_export($e->errorInfo, true));
        flash("Error looking up profile visibility", "danger");
    }
    return 0;
}

function makeLoanPayment($account_num, $amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $losing_id = get_user_account_number($losing);
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:acs1, :acd1, :bc, :r,:m, :et1), 
            (:acs2, :acd2, :bc2, :r, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":bc"] = ($amount * -1);
        $params[":et1"] = get_user_account_balance($losing_id) + ($amount * -1);

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = ($amount * -1);
        $params[":et2"] = get_user_account_balance($account_num) - $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Transfer Made", "Success");
        } 
        catch (PDOException $e) 
        {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering money", "danger");
        }
        if(get_user_account_balance($account_num) == 0)
        {
            closeAccount($account_num);
        }
    }
}

function closeAccount($account_num)
{
    $query = "UPDATE Accounts set `open/closed` = 0 WHERE (user_id = :id AND account_number = :an)";
    $params[":id"] = get_user_id();
    $params[":an"] = $account_num;
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        flash("Account Closed", "Success");
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("There was an error closing Account", "danger");
    }

}


function paginate($query, $params = [], $records_per_page = 5) 
{

    global $total_records; //used for pagination display after this function
    global $page; //used for pagination display after this function
    //what page is the user on?
    //ensure we're not less than page 1 (page 1 is so it makes sense to the user, we'll convert it to 0)
    $page = se($_GET, "page", 1, false);
    if ($page < 1) {
        $page = 1;
    }

    $db = getDB();

    //get the total records for the current filtered (if applicable) data
    //this will get the get the part of the query after FROM
    $t_query = "SELECT count(1) as `total` FROM " . explode(" FROM ", $query)[1];
    //var_dump($t_query);
    $stmt = $db->prepare($t_query);
    try {
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $total_records = (int)se($result, "total", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error getting total records: " . var_export($e->errorInfo, true));
    }
    $offset = ($page - 1) * $records_per_page;
    //get the data 
    $query .= " LIMIT :offset, :limit";
    //IMPORTANT: this is required for the execute to set the limit variables properly
    //otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //END IMPORTANT
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $params[":offset"] = $offset;
        $params[":limit"] = $records_per_page;
        //var_dump($params);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<pre>";
        var_dump($e);
        echo "</pre>";
        error_log("Error getting records: " . var_export($e->errorInfo, true));
        flash("There was a problem with your request, please try again", "warning");
    }
    return $results;
}

function pagination_filter($newPage) 
{
    $_GET["page"] = $newPage;
    //php.net/manual/en/function.http-build-query.php
    return se(http_build_query($_GET));
}




?>
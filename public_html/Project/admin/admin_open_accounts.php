<?php
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) 
{
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}
?>

<?php
if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>

<div class="container-fluid">
    <h1>(Admin) Create Account For User</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label for="account_type" class="form-label">Account Type</label>
            <select id="acc_type" name="acc_type" class="form-select">
              <option>Checking</option>
              <option>Savings</option>
            </select>
        </div> 
        <div class="mb-3">
            <label class="form-label" for="min_deposit">Minimum Deposit (Required)</label>
            <input class="form-control" type="text" id="deposit" name="deposit" required value="5"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="confirm">Confirm</label>
            <input class="form-control" type="password" name="confirm" required minlength="8" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Create" />
        <br><br>
        <a class="btn btn-primary" href="user_search.php" role="button"> Back </a>
    </form>
</div>

<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>

<?php
    if (isset($_POST["password"]) && isset($_POST["confirm"])) 
    {
        $password = se($_POST, "password", "", false);
        $confirm = se($_POST, "confirm", "", false);
        $deposit = se($_POST, "deposit", "", false);
        $hasError = false;

        if($deposit < 5) {
            flash("Desposit Has to be a minimum of $5", "danger");
            $hasError = true; 
        }
        if (empty($password)) {
            flash("password must not be empty", "danger");
            $hasError = true;
        }
        if (empty($confirm)) {
            flash("Confirm password must not be empty", "danger");
            $hasError = true;
        }
        if (!is_valid_password($password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (
            strlen($password) > 0 && $password !== $confirm
        ) {
            flash("Passwords must match", "danger");
            $hasError = true;
        }
        if(!$hasError)
            {
                $account = ["id" => -1, "account_number" => false, "balance" => 0];
                //this should always be 0 or 1, but being safe
                $query = "SELECT id, account_number, balance from Accounts where user_id = :uid LIMIT 1";
                $db = getDB();
                $stmt = $db->prepare($query);
                try {
                    $user_id = $_GET["id"];
                    $stmt->execute([":uid" => $user_id]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    $account_type = se($_POST, "acc_type", "", false);
                    $deposit = se($_POST, "deposit", "", false);
                    $query = "INSERT INTO Accounts (account_type, user_id) VALUES (:at, :uid)";
                    $stmt = $db->prepare($query);
                    if (!$result) {
                        //account doesn't exist, create it
                        try {
                            $stmt->execute([":at" => $account_type, ":uid" => $user_id]);
                            $account["id"] = $db->lastInsertId();
                            //this should mimic what's happening in the DB without requiring me to fetch the data
                            $account["account_number"] = str_pad($user_id, 12, "0");
                            flash("Account For User Successfully Created", "success");
                            makeIntialDeposit($deposit, "Deposit", -1, $account["id"], "Intial Deposit for Created Account");
                            if($account_type == "Savings")
                                insert_APY($account["id"]);
                        } catch (PDOException $e) {
                            flash("Error Creating Account For User", "danger");
                            error_log(var_export($e, true));
                        }
                    } else {
                        $query = "INSERT INTO Accounts (account_number, account_type, user_id) VALUES (:an, :at, :uid)";
                        $user_id = $_GET["id"];
                        $account_number = randomNumber(12);
                        $stmt = $db->prepare($query);
                        $stmt->execute([":an" => $account_number, ":at" => $account_type, ":uid" => $user_id]);
                        $account["id"] = $db->lastInsertId();
                        flash("Account For User Successfully Created", "success");
                        makeIntialDeposit($deposit, "Deposit", -1, $account["id"], "Intial Deposit for Created Account");
                        if($account_type == "Savings")
                            insert_APY($account["id"]);
                    }
                } catch (PDOException $e) {
                    flash("Technical Error: " . var_export($e->errorInfo, true), "danger");
                }
            }
    }
?>


<?php
require_once(__DIR__ . "/../../../partials/flash.php");
?>
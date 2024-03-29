<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<?php
if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
$user_id = get_user_id();
$query = "SELECT * from Accounts WHERE user_id = $user_id ORDER BY modified desc";
$db = getDB();
$params = null;
$stmt = $db->prepare($query);
$accounts = [];
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$accounts = $results;
?>
<?php
$Loans = [];
$other = [];
foreach($accounts as $account):
{
    if($account["frozen"] == 0)  
    { 
        if($account["open/closed"] == 1)
            if($account["account_type"] == "Loan")
            {
                array_push($Loans, $account);
            }
            else
            {
                array_push($other, $account);
            }
    }
}
endforeach;
?>
<div class="container-fluid">
    <h1>Create Account</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label for="account_type" class="form-label">Account Type</label>
            <select id="acc_type" name="acc_type" class="form-select">
              <option>Loan</option>
            </select>
        </div> 
        <div class="mb-3">
            <label class="form-label" for="min_deposit">Minimum (500)</label>
            <input class="form-control" type="text" id="deposit" name="deposit" required value="500"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="loan_apy">APY</label>
            <input class="form-control" type="text" id="loan_interest" name="apy" value="<?php echo get_loan_interest_rate(); ?>" readonly/>
        </div>
        <div class="mb-3">
            <label for="acc_src" class="form-label">Source Account (Your Account)</label>
            <select id="account" name="account_src" class="form-select">
                <?php foreach ($other as $account) : ?>
                    <option> <?php se($account, "account_number"); ?> </option>
                <?php endforeach; ?>
            </select>
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
        $acc_src = se($_POST, "account_src", "", false);
        $password = se($_POST, "password", "", false);
        $confirm = se($_POST, "confirm", "", false);
        $deposit = se($_POST, "deposit", "", false);
        $hasError = false;

        if($deposit < 500) {
            flash("Loan Has to be a minimum of $500", "danger");
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
            $user_id = get_user_id(); 
            $account_type = se($_POST, "acc_type", "", false);
            $deposit = se($_POST, "deposit", "", false);
            $account_number = randomNumber(12);
            $memo = "Applied to Account: " . $acc_src; 
            $query = "INSERT INTO Accounts (account_number, account_type, user_id) VALUES (:an, :at, :uid)";
            $db = getDB();
            $stmt = $db->prepare($query);
            try {
                $stmt->execute([":an" => $account_number, ":at" => $account_type, ":uid" => $user_id]);
                $account["id"] = $db->lastInsertId();
                flash("Loan Applied", "success");
                loanDeposit($deposit, "Loan Transfer", -1, $account["id"], $memo);
                insert_APY_for_loan($account["id"]);
                insertLoan($acc_src, $deposit);
                redirect("list_accounts.php");
                } 
                catch (PDOException $e) 
                {
                flash("Technical Error: " . var_export($e->errorInfo, true), "danger");
                }
        }
    }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
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
$query = "SELECT account_type, `open/closed`, account_number, id, balance from Accounts WHERE user_id = $user_id ORDER BY modified desc";
$db = getDB();
$params = null;
$stmt = $db->prepare($query);
$accounts = [];
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$accounts = $results;
$Loans = [];
$other = [];
foreach($accounts as $account):
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
endforeach;
?>
<div class="container-fluid">
    <h1>Close Account</h1>
    <form onsubmit="return validate(this)" method="POST"> 
        <div class="mb-3">
            <label for="acc_src" class="form-label">Account (This Account Will Be Closed)</label>
            <select id="account" name="account" class="form-select">
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
        <input type="submit" class="mt-3 btn btn-primary" value="Close" />
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
        $account = se($_POST, "account", "", false);
        $balance = get_user_account_balance($account);
        $source_id = get_user_account_id($account);
        $password = se($_POST, "password", "", false);
        $confirm = se($_POST, "confirm", "", false);
        $hasError = false;

        if($balance != 0)
        {
            flash("All Funds Must Be Empty To Close Account", "danger");
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
            flash("Yay No errors yet", "success");
            closeAccount($account);

        }
    }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
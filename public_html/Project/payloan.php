<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$user_id = get_user_id();
$query = "SELECT account_type, account_number, id, balance from Accounts WHERE user_id = $user_id ORDER BY modified desc";
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
<h1>Make Loan Payment</h1>
<form onsubmit="return validate(this)" method="POST">
    <div class="mb-3">
      <label for="which_account" class="form-label">Loan</label>
      <select id="loan_account" name="loan_account" class="form-select">
        <?php foreach ($Loans as $account) : ?>
            <option> <?php se($account, "account_number"); ?> </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="which_account" class="form-label">Account</label>
      <select id="account" name="account" class="form-select">
        <?php foreach ($other as $account) : ?>
            <option> <?php se($account, "account_number"); ?> </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="deposit_amount" class="form-label">Payment Amount</label>
      <input type="text" id="amount" name="amount" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Pay</button>
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
    if (isset($_POST["amount"]) && isset($_POST["account"])) 
    {
        $amount = se($_POST, "amount", "", false);
        $account_src = se($_POST, "account", "", false);
        $account_dest = se($_POST, "loan_account", "", false);
        $balance = get_user_account_balance($account_src);
        $loan_balance = get_user_account_balance($account_dest);
        $destination_id = get_user_account_id($account_dest);
        $source_id = get_user_account_id($account_src);
        $hasError = false;

        if($amount <= 0) {
            flash("Payment Has to be more than $0", "danger");
            $hasError = true; 
        }

        if($amount > $loan_balance)
        {
            flash("Payment Can't Be More Than Loan Balance", "danger");
            $hasError = true; 
        }


        if($amount > $balance) {
            flash("Can't Withdraw More Than Balance", "danger");
            $hasError = true; 
        }

        if(!$hasError)
            {
                makeLoanPayment($account_dest, $amount, "Loan Payment", $source_id, $destination_id, "Payment");
                flash("Payment Made", "Success");
            }
    }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$account_num = $_GET["acc_num"];
$name = $_GET["acc_name"];
$user_id = get_user_id();
$query = "SELECT account_number, id, balance from Accounts WHERE user_id = $user_id ORDER BY modified desc LIMIT 5";
$db = getDB();
$params = null;
$stmt = $db->prepare($query);
$accounts = [];
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$accounts = $results;
?>


<div class="container-fluid">
<h1>Transfer to Another User</h1>
<form onsubmit="return validate(this)" method="POST">
    <div class="mb-3">
      <label for="acc_src" class="form-label">Source Account (Your Account)</label>
      <select id="account" name="account_src" class="form-select">
        <?php foreach ($accounts as $account) : ?>
            <option> <?php se($account, "account_number"); ?> </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="reciever_name" class="form-label">Reciever's Last Name</label>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
      <label for="acc_dest" class="form-label">Destination Account (Different User Account)</label>
      <input type="text" id="account_dest" name="account_dest" value="<?php echo $account_num; ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
      <label for="deposit_amount" class="form-label">Transfer Amount</label>
      <input type="text" id="amount" name="amount" class="form-control" >
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a memo here" id="memoTextarea" name="memoTextArea"></textarea>
        <label for="memoTextarea">Memo (Optional)</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Transfer</button>
    <a class="btn btn-primary" href="pickuser.php" role="button"> Back </a>
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
    if (isset($_POST["amount"]) && isset($_POST["account_src"]) && isset($_POST["account_dest"])) 
    {
        $amount = se($_POST, "amount", "", false);
        $account_src = se($_POST, "account_src", "", false);
        $account_dest = se($_POST, "account_dest", "", false);
        $memo = se($_POST, "memoTextArea", "", false);
        $balance = get_user_account_balance($account_src);
        $destination_id = get_user_account_id($account_dest);
        $source_id = get_user_account_id($account_src);
        $hasError = false;


        if((strlen($memo) == 0)) {
            $memo = "User Made Withdrawal";
        }

        if($account_src === $account_dest)
        {
            flash("Cannot Transfer to Same Account", "danger");
            $hasError = true;
        }

        if($amount > $balance) {
            flash("Can't Withdraw More Than Balance", "danger");
            $hasError = true; 
        }

        if($amount <= 0) {
            flash("Transfer Has to be more than $0", "danger");
            $hasError = true; 
        }
        if(!$hasError)
            {
            makeTransfer($account_dest, $amount, "Ext-Transfer", $source_id, $destination_id, $memo);
            flash("Transfer Made", "Success");
            }
    }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
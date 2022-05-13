<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_id = get_user_id();
$query = "SELECT id, account_number, account_type, `open/closed`, modified, balance, APY from Accounts WHERE user_id = $user_id ORDER BY modified desc";
$db = getDB();
$params = null;
$stmt = $db->prepare($query);
$accounts = [];
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $accounts = $results;
        

    } else {
        flash("No Accounts found", "warning");
    }
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}
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
    <h1>Accounts</h1>
    <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Modified</th>
            <th>Balance</th>
            <th>APY</th>
        </thead>
        <tbody>
            <?php if (empty($other)) : ?>
                <tr>
                    <td colspan="100%">No Accounts</td>
                </tr>
            <?php else : ?>
                <?php foreach ($other as $account) : ?>
                    <tr>
                        <td><a href="new_trans_history.php?id=<?php echo se($account, "id");?>&acc_num=<?php echo se($account, "account_number");?>"> <?php se($account, "account_number"); ?></a></td>
                        <td><?php se($account, "account_type"); ?></td>
                        <td><?php se($account, "modified"); ?></td>
                        <td><?php se($account, "balance"); ?></td>
                        <td><?php se($account, "APY"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Modified</th>
            <th>Balance</th>
            <th>APY</th>
        </thead>
        <tbody>
            <?php if (empty($Loans)) : ?>
                <tr>
                    <td colspan="100%">No Loan Accounts</td>
                </tr>
            <?php else : ?>
                <?php foreach ($Loans as $account) : ?>
                    <tr>
                        <td><a href="new_trans_history.php?id=<?php echo se($account, "id");?>&acc_num=<?php echo se($account, "account_number");?>"> <?php se($account, "account_number"); ?></a></td>
                        <td><?php se($account, "account_type"); ?></td>
                        <td><?php se($account, "modified"); ?></td>
                        <td><?php se($account, "balance"); ?></td>
                        <td><?php se($account, "APY"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
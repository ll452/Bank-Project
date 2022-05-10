<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

    $account_num = $_GET["acc_num"];
    $query = "SELECT account_number, account_type, balance, APY, created from Accounts WHERE account_number = $account_num";
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

?>

<?php
    $id = $_GET["id"];
    $trans_query = "SELECT A.account_number as account_src, B.account_number as account_dest, transaction_type, balance_change, T.created, expected_total, memo FROM Transactions as T JOIN Accounts as A ON A.id = T.account_src JOIN Accounts as B ON B.id = T.account_dest WHERE T.account_src = $id ORDER BY T.modified desc LIMIT 10";
    $db = getDB();
    $params = null;
    $stmt = $db->prepare($trans_query);
    $transactions = [];
    try {
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            $transactions = $results;
        } else {
            flash("No Transactions found", "warning");
        }
    } catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "danger");
    }
?>

<div class="container-fluid">
    <?php foreach ($accounts as $account) : ?>
    <h1><?php se($account, "account_number"); ?></h1>
    <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
            <th>APY</th>
            <th>Opened / Created</th>
        </thead>
        <tbody>
            <?php if (empty($accounts)) : ?>
                <tr>
                    <td colspan="100%">No Accounts</td>
                </tr>
                <?php else : ?>
                <?php foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?php se($account, "account_number"); ?></td>
                        <td><?php se($account, "account_type"); ?></td>
                        <td><?php se($account, "balance"); ?></td>
                        <td><?php se($account, "APY"); ?></td>
                        <td><?php se($account, "created"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?php endforeach; ?>

    <h1>Transaction History</h1>
    <table class="table">
        <thead>
            <th>Transaction Type</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Balance Change</th>
            <th>Time</th>
            <th>Expected Total</th>
            <th>Memo</th>
        </thead>
        <tbody>
            <?php if (empty($transactions)) : ?>
                <tr>
                    <td colspan="100%">No Transactions</td>
                </tr>
            <?php else : ?>
                <?php foreach ($transactions as $transaction) : ?>
                    <tr>
                        <td><?php se($transaction, "transaction_type"); ?></td>
                        <?php if (se($transaction, "transaction_type", "", false) == "Withdraw") : ?>
                            <td><?php se($transaction, "account_src"); ?></td>
                            <td><?php se($transaction, "account_dest"); ?></td>
                        <?php else : ?>
                            <td><?php se($transaction, "account_dest"); ?></td>
                            <td><?php se($transaction, "account_src"); ?></td>
                        <?php endif; ?>
                        <td><?php se($transaction, "balance_change"); ?></td>
                        <td><?php se($transaction, "created"); ?></td>
                        <td><?php se($transaction, "expected_total"); ?></td>
                        <td><?php se($transaction, "memo"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>

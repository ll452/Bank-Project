<?php
require(__DIR__ . "/../../partials/nav.php");

$user_id = get_user_id();
$query = "SELECT account_number, account_type, modified, balance from Accounts WHERE user_id = $user_id ORDER BY modified desc LIMIT 5";
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
<div class="container-fluid">
    <h1>Accounts</h1>
    <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Modified</th>
            <th>Balance</th>
        </thead>
        <?php if (empty($accounts)) : ?>
                <tr>
                    <td colspan="100%">No Accounts</td>
                </tr>
            <?php else : ?>
                <?php foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?php se($account, "account_number"); ?></td>
                        <td><?php se($account, "account_type"); ?></td>
                        <td><?php se($account, "modified"); ?></td>
                        <td><?php se($account, "balance"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        <tbody>

        </tbody>
    </table>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
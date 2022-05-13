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
    $t_query = "SELECT count(1) as total FROM Transactions B WHERE 1";
    $d_query = "SELECT B.id, B.account_src, B.account_dest, B.expected_total, B.created, B.balance_change, B.transaction_type, B.memo AS A1 
    FROM Transactions B JOIN Accounts A1 on A1.id = B.account_src JOIN Accounts A2 on A2.id = B.account_dest WHERE 1";
    $start = se($_GET, "start", date("Y-m-d", strtotime("-1 month")), false);
    $end = se($_GET, "end", date("Y-m-d"), false);
    $type = se($_GET, "type", false, false);
    $params = [];    

    if ($start) {
        //don't forget to prefix the ambiguous column name
        $t_query .= " AND B.created >= :start";
        $d_query .= " AND B.created >= :start";
        $params[":start"] = $start;
    }

    if ($end) {
        //don't forget to prefix the ambiguous column name
        $t_query .= " AND B.created <= :end";
        $d_query .= " AND B.created <= :end";
        //offset the time to be 1 minute before end of day
        //by default the time component is 00:00:00 which is the beginning if this day
        //$params[":end"] = $end;
        $params[":end"] = date("Y-m-d 23:59:59", strtotime($end));
    }

    if ($type && $type !== "") {
        $t_query .= " AND transaction_type = :type";
        $d_query .= " AND transaction_type = :type";
        $params[":type"] = $type;
    }

    $t_query .= " AND account_src = :src";
    $d_query .= " AND account_src = :src";
    $params[":src"] = $id;

    switch ($type) {
        case "+date":
            //depending on the query we don't really need to order the data for total
            //this query specifically doesn't require it but I inlcuded it anyway
            $t_query .= " ORDER BY created asc";
            $d_query .= " ORDER BY created asc";
            break;
        case "-date":
            //depending on the query we don't really need to order the data for total
            //this query specifically doesn't require it but I inlcuded it anyway
            $t_query .= " ORDER BY created desc";
            $d_query .= " ORDER BY created desc";
            break;
        default:
            //depending on the query we don't really need to order the data for total
            //this query specifically doesn't require it but I inlcuded it anyway
            $t_query .= " ORDER BY created desc";
            $d_query .= " ORDER BY created desc";
            break;
    }

    $records_per_page = 5; 
    $total_records = 0; 
    $db = getDB();
    $stmt = $db->prepare($t_query);
    try {
        $stmt->execute($params);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($results) 
        {
            $total_records = $results["total"];
        } 
    } catch (PDOException $e) {
        error_log("Error getting total records: " . var_export($e->errorInfo, true));
    }

    $page = se($_GET, "page", 1, false);
    if ($page < 1) 
    {
        $page = 1;
    }
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $offset = ($page - 1) * $records_per_page;
    $d_query .= " LIMIT :offset, :limit";
    $transactions = [];
    $stmt = $db->prepare($d_query);
    try 
    {
        $params[":offset"] = $offset;
        $params[":limit"] = $records_per_page;
        $stmt->execute($params);
        $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
    catch (PDOException $e) 
    {
        error_log("Error getting records: " . var_export($e->errorInfo, true));
        flash("There was a problem with your request, please try again", "warning");
    }
    $total_pages = ceil($total_records / $records_per_page);
    


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
    <form>
            <div class="input-group mb-3">
                <span class="input-group-text" id="start-date">Start</span>
                <input name="start" type="date" class="form-control" placeholder="mm/dd/yyyy" aria-label="start date" aria-describedby="start-date" value="<?php se($start); ?>">
                <span class="input-group-text" id="end-date">End</span>
                <input name="end" type="date" class="form-control" placeholder="mm/dd/yyyy" aria-label="end date" aria-describedby="end-date" value="<?php se($end); ?>">
                <span class="input-group-text" id="filter">Transaction Type</span>
                <select class="form-control" name="type" aria-label="filter" aria-describedby="filter">
                    <option value="" readonly></option>
                    <option value="ext-transfer">Ext-Transfer</option>
                    <option value="deposit">Deposit</option>
                    <option value="withdraw">Withdraw</option>
                    <option value="transfer">Transfer</option>
                    <option value="loan transfer">Loan Transfer</option>
                    <option value="loan payment">Loan Payment</option>
                </select>

            </div>
            <input type="submit" class="btn btn-primary" value="Filter" />
            <input type="hidden" id="acc_num" name="acc_num" value="<?php echo $account_num;?>">
            <input type="hidden" id="id" name="id" value="<?php echo $id;?>">

        </form>

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
                            <td><?php echo (get_user_account_number(se($transaction, "account_src","",false))); ?></td>
                            <td><?php echo (get_user_account_number(se($transaction, "account_dest","",false))); ?></td>
                        <?php elseif (se($transaction, "transaction_type", "", false) == "Loan Payment") : ?>
                            <td><?php echo (get_user_account_number(se($transaction, "account_src","",false))); ?></td>
                            <td><?php echo (get_user_account_number(se($transaction, "account_dest","",false))); ?></td>
                        <?php else : ?>
                            <td><?php echo (get_user_account_number(se($transaction, "account_dest","",false))); ?></td>
                            <td><?php echo (get_user_account_number(se($transaction, "account_src","",false))); ?></td>
                        <?php endif; ?>
                        <td><?php se($transaction, "balance_change"); ?></td>
                        <td><?php se($transaction, "created"); ?></td>
                        <td><?php se($transaction, "expected_total"); ?></td>
                        <td><?php se($transaction, "A1"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <div>
        <?php /** required $total_pages and $page to be set */ ?>
        <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
    </div>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>

<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$accounts = [];
?>

<div class="container-fluid">
<h1>Find User</h1>
<form onsubmit="return validate(this)" method="POST">
    <div class="mb-3">
      <label for="reciever_name" class="form-label">Reciever's Last Name</label>
      <input type="text" id="name" name="name" class="form-control" >
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Find</button>
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
    if (isset($_POST["name"])) 
    {
        $currentname = get_user_lname(get_user_id());
        $name = se($_POST, "name", "", false);
        $user_id = get_user_id_by_lname($name);
        $query = "SELECT `open/closed`, account_type, account_number, id, balance from Accounts WHERE user_id = $user_id ORDER BY modified desc";
        $db = getDB();
        $params = null;
        $stmt = $db->prepare($query);
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

        $hasError = false;
        if(strcasecmp($name,$currentname) == 0)
        {
            $hasError = true;
            flash("Cannot Transfer to Self", "Danger");
        }

        if(!$hasError)
            {
            flash("User Found", "Success");
            }



    }
?>

<div class="container-fluid">
    <h1>Accounts</h1>
    <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
        </thead>
        <tbody>
            <?php if (empty($accounts) || $hasError == true) : ?>
                <tr>
                    <td colspan="100%">No Accounts</td>
                </tr>
                <?php else : ?>
                <?php foreach ($other as $account) : ?>
                    <tr>
                        <td><a href="user_transfer.php?id=<?php echo se($account, "id");?>&acc_num=<?php echo se($account, "account_number");?>&acc_name=<?php echo $name;?>"> <?php se($account, "account_number"); ?></a></td>
                        <td><?php se($account, "account_type"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>
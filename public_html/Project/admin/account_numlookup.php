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

<?php
$query = "SELECT * from Accounts";
$params = null;
if (isset($_POST["search_user"])) 
{
    $search = se($_POST, "search_user", "", false);
    $query .= " WHERE account_number LIKE :search";
    $params =  [":search" => "%$search%"];
    $query .= " ORDER BY modified desc";
    $db = getDB();
    $stmt = $db->prepare($query);
    $search_results = [];
    try 
    {
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) 
        {
            $search_results = $results;
        } 
        else 
        {
            flash("No matches found", "warning");
        }
    } 
    catch (PDOException $e) 
    {
        flash(var_export($e->errorInfo, true), "danger");
    }
}
?>

<div class="container-fluid">
    <h1>Account Lookup</h1>
    <form method="POST">
    <div class="input-group mb-3">
            <input class="form-control" type="search" name="search_user" placeholder="User Search" />
            <input class="btn btn-primary" type="submit" value="Search" />
    </div> 
        <table class="table">
        <thead>
            <th>Account Number</th>
            <th>Freeze Account</th>
        </thead>
        <tbody>
            <?php if (empty($search_results)) : ?>
                <tr>
                    <td colspan="100%">No Users</td>
                </tr>
            <?php else : ?>
                <?php foreach ($search_results as $r) : ?>
                    <tr>
                        <td><a href="admin_dupe_file.php?id=<?php echo se($r, "id");?>&acc_num=<?php echo se($r, "account_number");?>"> <?php se($r, "account_number"); ?></a></td>
                        <td><a href="freeze.php?id=<?php echo se($r, "id");?>&acc_num=<?php echo se($r, "account_number");?>">Freeze</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>   
    </form>
</div>


<?php
require_once(__DIR__ . "/../../../partials/flash.php");
?>
<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) 
{
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}
$query = "SELECT * from Users";
$params = null;
if (isset($_POST["search_user"])) 
{
    $search = se($_POST, "search_user", "", false);
    $query .= " WHERE (firstname LIKE :search) OR (lastname LIKE :search)";
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
    <h1>User Search</h1>
    <form method="POST">
    <div class="input-group mb-3">
            <input class="form-control" type="search" name="search_user" placeholder="User Search" />
            <input class="btn btn-primary" type="submit" value="Search" />
    </div> 
        <table class="table">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Accounts</th>
            <th>Open Accounts</th>
            <th>Deactivate User</th>
        </thead>
        <tbody>
            <?php if (empty($search_results)) : ?>
                <tr>
                    <td colspan="100%">No Users</td>
                </tr>
            <?php else : ?>
                <?php foreach ($search_results as $r) : ?>
                    <tr>
                        <td><?php se($r, "firstname"); ?></td>
                        <td><?php se($r, "lastname"); ?></td>
                        <td><a href="view_user_accounts.php?id=<?php echo se($r, "id");?>">View</a></td>
                        <td><a href="admin_open_accounts.php?id=<?php echo se($r, "id");?>">Open Account For User</a></td>
                        <td><a href="deactivate.php?id=<?php echo se($r, "id");?>">Deactivate</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>   
    </form>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>
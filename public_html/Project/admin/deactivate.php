<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) 
{
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}
?>

<div class="container-fluid">
    <h1>Deactivate User</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label" for="pw">Admin Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="confirm">Confirm Password</label>
            <input class="form-control" type="password" name="confirm" required minlength="8" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Deactivate"/>
        <br>
        <br>
        <a class="btn btn-primary" href="user_search.php" role="button"> Back </a>
    </form>
</div>

<?php
    if (isset($_POST["password"]) && isset($_POST["confirm"])) 
    {
        $password = se($_POST, "password", "", false);
        $confirm = se($_POST, "confirm", "", false);
        $hasError = false;

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
        if (strlen($password) > 0 && $password !== $confirm) {
            flash("Passwords must match", "danger");
            $hasError = true;
        }
        if(!$hasError)
        {
            $query = "UPDATE Users SET is_active = 0 WHERE id = :id";
            $params[":id"] = $_GET["id"];
            $db = getDB();
            $stmt = $db->prepare($query);
            try {
                $stmt->execute($params);
                flash("Account Deactivated", "success");
                } 
                catch (PDOException $e) 
                {
                flash("Technical Error Deactivating Account: " . var_export($e->errorInfo, true), "danger");
                }
        }
    }
?>


<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>
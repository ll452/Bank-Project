<?php
function get_user_account_balance($acc_num)
{
    $query = "SELECT balance from Accounts WHERE account_number = :an";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":an" => $acc_num]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "balance", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching balance for user: " . var_export($e->errorInfo, true));
        flash("Error looking up balance", "danger");
    }
    return 0;
}

function get_user_account_id($acc_num)
{
    $query = "SELECT id from Accounts WHERE account_number = :an";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":an" => $acc_num]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "id", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching id for account: " . var_export($e->errorInfo, true));
        flash("Error looking up id", "danger");
    }
    return 0;
}

function get_user_account_number($id)
{
    $query = "SELECT account_number from Accounts WHERE id = :id";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return se($r, "account_number", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching account number: " . var_export($e->errorInfo, true));
        flash("Error looking up account number", "danger");
    }
    return 0;
}

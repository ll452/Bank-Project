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

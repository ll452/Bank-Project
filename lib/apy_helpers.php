<?php
function get_savings_interest_rate()
{
    $query = "SELECT savings_interest from `System Properties` ";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return se($r, "savings_interest", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching savings APY: " . var_export($e->errorInfo, true));
        flash("Error looking up savings APY", "danger");
    }
    return 0;
}

function get_loan_interest_rate()
{
    $query = "SELECT loan_interest FROM `System Properties` LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return se($r, "loan_interest", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching savings APY: " . var_export($e->errorInfo, true));
        flash("Error looking up savings APY", "danger");
    }
    return 0;
}

function insert_APY($acc_id)
{
        $query = "UPDATE Accounts SET APY=:apy WHERE id = :id";
        $params[":apy"] = get_savings_interest_rate();
        $params[":id"] = $acc_id;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            flash("APY For Savings Set", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error setting APY", "danger");
        }
}

function insert_APY_for_loan($acc_id)
{
        $query = "UPDATE Accounts SET APY=:apy WHERE id = :id";
        $params[":apy"] = get_loan_interest_rate();
        $params[":id"] = $acc_id;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            flash("APY For Savings Set", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error setting APY", "danger");
        }
}
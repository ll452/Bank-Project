<?php

/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function makeWithdraw($amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $gaining_id = -1;
        $losing_id = get_user_id();
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:acs1, :acd1, :bc, :r,:m, :et1), 
            (:acs2, :acd2, :bc2, :r, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":bc"] = ($amount * -1);
        $params[":et1"] = get_user_account_balance($losing_id) + ($amount * -1);

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = $amount;
        $params[":et2"] = get_user_account_balance($gaining_id) + $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Withdrawal Made", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error withdrawing money", "danger");
        }
    }
}
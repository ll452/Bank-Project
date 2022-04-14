<?php

/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function makeDeposit($amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo) 
            VALUES (:acs1, :acd1, :bc, :r,:m), 
            (:acs2, :acd2, :bc2, :r, :m)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":bc"] = ($amount * -1);

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Deposit Made", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering money", "danger");
        }
    }
}
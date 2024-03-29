<?php

/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function makeDeposit($account_num, $amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $losing_id = "000000000000";
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
        $params[":et2"] = get_user_account_balance($account_num) + $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Deposit Made", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error depositing money", "danger");
        }
    }
}

function makeIntialDeposit($amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $losing_id = "000000000000";
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
        $params[":et2"] = $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Deposit Made", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error depositing money", "danger");
        }
    }
}

function loanDeposit($amount, $reason, $losing = -1, $gaining = -1, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($amount > 0) 
    {
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:acs1, :acd1, :bc, :r,:m, :et1), 
            (:acs2, :acd2, :bc2, :r, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":bc"] = $amount;
        $params[":et1"] = get_user_account_balance($losing) + $amount;

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":bc2"] = $amount;
        $params[":et2"] = get_user_account_balance($gaining) + $amount;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
            flash("Loan Deposited", "Success");
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error processing loan", "danger");
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 07-Mar-19
 * Time: 12:17 AM
 */
$sel_query = "SELECT * FROM transaction";

function transactionId(){
    global $con,$sel_query;
    $stmt = mysqli_query($con,$sel_query);
    $count = mysqli_num_rows($stmt);
/*    mysqli_close($con);*/
    return $count;
}

function updateCreditBalance($amount,$accno){
    global $con;
    $query = "UPDATE `accountbalance` SET `balance` = `balance` + $amount WHERE account_num = $accno ";
    if(!mysqli_query($con,$query)){
        echo "<script>alert('Credit is not Performed')</script>";
        return;
    }
}

function updateDebitBalance($amount,$accno){
    global $con;
    $query = "UPDATE `accountbalance` SET `balance` = `balance` - $amount WHERE account_num = $accno ";
    if(!mysqli_query($con,$query)){
        echo "<script>alert('Debit is not Performed')</script>";
        return;
    }
}

/*function accNumCheck($accnum){
    global $con;
    $query = "SELECT * FROM `userdetail` where `customer_accountnum` = $accnum";
    $stmt = mysqli_query($con,$query);
    if (mysqli_num_rows($stmt)){
        return true;
    }else{
        return false;
    }
}*/

function insertTransaction($transactionid,$depositer_name,$depositer_acc_num,$amount,$desc,$creditor_name,$creditor_acc_num,$transaction_date,$transaction_type){
    global $con;
    $query = "INSERT INTO `transaction`(`transaction_id`, `depositer_name`, `deposit_account_no`, `deposit_amount`, `transaction_desc`, `creditor_name`, `creditor_account_no`,`transaction_date`) VALUES ($transactionid,'$depositer_name',$depositer_acc_num,$amount,'$desc','$creditor_name',$creditor_acc_num,'$transaction_date')";
    /*if(mysqli_query($con,$query)){
        updateCreditBalance($amount,$depositer_acc_num);
        echo "<script>alert('Data Inserted')</script>";
    }else{
        echo "<script>alert('Data Not Inserted')</script>";
        echo mysqli_error($con);
    }*/
    switch ($transaction_type){
        case "deposit":
            if(mysqli_query($con,$query)){
                updateCreditBalance($amount,$creditor_acc_num);
                echo "<script>alert('Data Inserted')</script>";
                echo "<script>window.location.href = 'index.php'</script>";
            }else{
                echo "<script>alert('Data Not Inserted')</script>";
                echo mysqli_error($con);
            }break;
        case "credit":
            if(mysqli_query($con,$query)){
                updateCreditBalance($amount,$creditor_acc_num);
                updateDebitBalance($amount,$depositer_acc_num);
                echo "<script>alert('Data Inserted')</script>";
                echo "<script>window.location.href = 'deposit.php'</script>";
            }else{
                echo "<script>alert('Data Not Inserted')</script>";
                echo mysqli_error($con);
            }break;
        default:
            echo "<script>alert('Transaction Failed')</script>";
    }
}

function debitBalanceCheck($accnum,$amount){
    global $con;
    $query = "SELECT * FROM `accountbalance` where `account_num` = $accnum";
    $stmt = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($stmt);
    if (mysqli_num_rows($stmt)){
        if ($row['balance'] >= $amount){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function credit_detail_get($accnum){
    global $con;
    $credit_json_query = "SELECT * FROM `transaction` WHERE creditor_account_no = $accnum";
    $credit_res = mysqli_query($con,$credit_json_query);
    $data_json1[] = "";
    $i=0;
    while($rows = mysqli_fetch_assoc($credit_res)){
    $data_json1[$i] = $rows;$i++;
    }
    return $data_json1;
}

function debit_detail_get($accnum){
    global $con;
    $debit_json_query = "SELECT * FROM `transaction` WHERE creditor_account_no = $accnum AND depositer_name != 'SELF' ";
    $debit_res = mysqli_query($con,$debit_json_query);
    $data_json2[] = "";
    $i=0;
    while ($rows = mysqli_fetch_assoc($debit_res)){
        $data_json2[$i] = $rows;$i++;
    }
    return $data_json2;
}

function customer_detail_get($accnum){
    global $con;
    $usr_sel_query ="SELECT * FROM `userdetail` WHERE customer_accountnum =$accnum";
    $sel_res = mysqli_query($con,$usr_sel_query);
    $rows = mysqli_fetch_assoc($sel_res);
    return $rows;
}
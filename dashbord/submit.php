<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 06-Mar-19
 * Time: 10:26 AM
 */
session_start();
include_once ("../config.php");
include_once ("DBoperation.php");
global $con;
if (isset($_GET['deposit'])){
    $desc = $_GET['desc'];
    $amount = $_GET['amount'];
    $depositer_name = $_SESSION['userName'];
    $depositer_acc_num = $_SESSION['accountNumber'];
    $transactionid = transactionId() + 1;
    $transaction_date = date('y/m/d');
    insertTransaction($transactionid,"SELF",$depositer_acc_num,$amount,$desc,$depositer_name,$depositer_acc_num,$transaction_date,'deposit');
    /*echo "<script>window.location.href = </script>";*/
}

if (isset($_GET['transfer'])){
$credit_username = $_GET['username'];
$credit_accnum = $_GET['accountnumber'];
$desc = $_GET['desc'];
$amount = $_GET['amount'];
$depo_name = $_SESSION['userName'];
$depo_acc_num = $_SESSION['accountNumber'];
$transactionid = transactionId() + 1;
$transaction_date = date('y/m/d');
if(debitBalanceCheck($depo_acc_num,$amount)){
    insertTransaction($transactionid,$depo_name,$depo_acc_num,$amount,$desc,$credit_username,$credit_accnum,$transaction_date,'credit');

}else{
    echo "<script>alert('Entered amount Exceed cash in account')</script>";
}
}

if(isset($_GET['logout'])){
    session_destroy();
}

if (isset($_GET['credit_accnum'])){
    $credit_accnum = $_GET['credit_accnum'];
    $rows = credit_detail_get($credit_accnum);
    echo json_encode($rows);
}

if (isset($_GET['debit_accnum'])){
    $debit_accnum = $_GET['debit_accnum'];
    $data_json2 = debit_detail_get($debit_accnum);
    echo json_encode($data_json2);
}

if (isset($_GET['acc_det_num'])){
    $user_accnum = $_GET['acc_det_num'];
    $usr_data = customer_detail_get($user_accnum);
    echo json_encode($usr_data);
}
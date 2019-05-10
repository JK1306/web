<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 04-Mar-19
 * Time: 6:23 PM
 */
session_start();
include_once("config.php");

function balanceInsert($acc_num,$holder_name){
    global $con;
/*    $name = $_SESSION['userName'];
    $accnum = $_SESSION['accountNumber'];*/
    $query = "INSERT INTO `accountbalance`(`account_num`, `account_holder_name`, `balance`) VALUES ($acc_num,'$holder_name',0)";
    if (!mysqli_query($con,$query)){
        echo "<script>alert('Account Not Created')</script>";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 14-Mar-19
 * Time: 12:25 PM
 */
include_once ("../config.php");
if (isset($_GET['credit_accnum'])){
$credit_accnum = $_GET['credit_accnum'];
$credit_json_query = "SELECT * FROM `transaction` WHERE creditor_account_no = $credit_accnum";
$credit_res = mysqli_query($con,$credit_json_query);
$data_json1[] = "";
$i=0;
while ($rows = mysqli_fetch_assoc($credit_res)){
$data_json1[$i] = $rows;$i++;
}
echo json_encode($data_json1);
}

if (isset($_GET['debit_accnum'])){
    $debit_accnum = $_GET['debit_accnum'];
    $debit_json_query = "SELECT * FROM `transaction` WHERE creditor_account_no = $debit_accnum AND depositer_name != 'SELF' ";
    $debit_res = mysqli_query($con,$debit_json_query);
    $data_json2[] = "";
    $i=0;
    while ($rows = mysqli_fetch_assoc($debit_res)){
        $data_json2[$i] = $rows;$i++;
    }
    echo json_encode($data_json2);
}
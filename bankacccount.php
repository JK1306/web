<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 03-Mar-19
 * Time: 7:14 PM
 */

include_once ("config.php");
$query = "select * from userdetail";
$res = mysqli_query($con,$query);
function bankAccountGen(){
    global $res;
    $count = mysqli_num_rows($res);
    return $count;
}

function accountcheck($email){
    global $res;
    while($result = mysqli_fetch_assoc($res)){
    if ($email == $result['customer_email']){
        return false;
        }
    }return true;
}
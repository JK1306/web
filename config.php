<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 26-Feb-19
 * Time: 9:02 PM
 */
$HOST = "localhost";
$ADMIN = "root";
$PASSWORD = "";
$DBNAME = "bank";
$con = mysqli_connect($HOST,$ADMIN,$PASSWORD,$DBNAME) or die("Connection Failed".mysqli_connect_error());

function test(){
    global $con;
    $query = "select * from userdetail";
    $stmnt = mysqli_query($con, $query);
    /*$result = mysqli_fetch_assoc($stmnt);*/
    $count = mysqli_affected_rows($con);
   /* mysqli_close($con);*/
    return $count;
}
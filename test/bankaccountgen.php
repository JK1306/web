<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 03-Mar-19
 * Time: 5:28 PM
 */
/*include_once ("config.php");*/
$con = mysqli_connect("localhost","root","","test");
$query = 'select * from account_test';
$a = mysqli_query($con,$query);
$b = mysqli_num_rows($a);
echo $b."<br>";
while ($c = mysqli_fetch_assoc($a)){
echo $c["account_num"]."<br>";
}
$d = rand(1000,10000);
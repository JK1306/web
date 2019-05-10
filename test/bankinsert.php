<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 03-Mar-19
 * Time: 6:33 PM
 */
/*include_once ("bankaccountgen.php");
if(isset($_POST)){
    $b = rand(1000,10000);
    $query = "INSERT INTO `account_test`(`account_num`) VALUES ($b)";
    $d = mysqli_query($con,$query);
}
*/
$i=0;
while(true){
    if($i==10){
        echo $i;
        return 0;
    }else{
        echo $i."<br>";
    }
    $i=rand(1,10);
}echo "Hela";
?>
<form method="post">
    <input type="submit">
</form>
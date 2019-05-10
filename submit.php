<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 26-Feb-19
 * Time: 9:02 PM
 */
/*session_start();*/
include_once ("bankacccount.php");
include_once ("operation.php");
if (isset($_POST['Submit']) && $_POST['Submit'] == 'Sign Up'){
    $name = $_POST["name"];
    $mail = $_POST["mailId"];
    $paswd = $_POST['paswd'];
    $re_paswd = $_POST['re-paswd'];
    $num = $_POST["phnum"];
    $date = $_POST["date"];
    $count = bankAccountGen();
    $acc_number = $count + 1;
    $accbool = accountcheck($mail);
    //mysqli_close($con);
    $ins_query = "INSERT INTO `userdetail`(`customer_name`, `customer_email`, `customer_phone`, `customer_dob`, `customer_paswd`, `customer_accountnum`) VALUES ('$name','$mail',$num,'$date','$paswd',$acc_number)";
/*    $acc_number = rand(1000,10000);*/

    if($accbool){
        if ($paswd != $re_paswd) {
            echo "<script> alert('Enter Password Correctly') </script>";
            echo "<script>window.location.href = 'banking.php'</script>";
        }else{
            if (!is_numeric($num)){
                echo "<script> alert('Enter Numerical Values in Phone number') </script>";
               /* echo "<script> alert(typeof($num)) </script>";*/
                echo "<script>window.location.href = 'banking.php'</script>";
            }else{
                if(mysqli_query($con,$ins_query)){
                    /*echo "<script>alert('Data Inserted')</script>";*/
                    balanceInsert($acc_number,$name);
                    echo "<script>window.location.href ='index.php'</script>";
                }else{echo "<script>alert('Data not Inserted')</script>";
                echo mysqli_error($con);
                }
                /*echo "<script>alert('Data Inserted')</script>";*/
            }
        }
    }else{
        echo "<script>alert('User Already Exist');</script>";
        echo "<script>window.location.href = 'banking.php'</script>";
    }
}

if (isset($_POST) && $_POST['Submit']== 'Sign In'){
    $userName = $_POST['mail'];
    $paswd = $_POST['password'];
    $sel_query = "SELECT * FROM userdetail WHERE customer_email = '$userName'";
    $result = mysqli_query($con,$sel_query);
    $row = mysqli_fetch_assoc($result);
    if($row['customer_paswd'] == $paswd){
        $_SESSION['userName'] = $row['customer_name'];
        $_SESSION['accountNumber'] = $row['customer_accountnum'];
        $_SESSION['balance'] = $row['accountbalance'];
        echo "<script>window.location.href = '\dashbord/index.php'</script>";
    }else{
        echo "<script>alert('Entered Password is not correct')</script>";
        echo "<script>window.location.href = 'banking.php'</script>";
    }
/*    echo $row['customer_paswd'];*/
}

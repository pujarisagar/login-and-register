<?php
require_once("conn.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
}
if ($password != $cpassword) {
    header("location:register.php?password_error=The password is not match");
    exit;
}

    $sql="SELECT email FROM user WHERE email='$email'";
    $sql1="SELECT username FROM user WHERE username='$username'";

    $result= $conn->query($sql);

    $result1 = $conn->query($sql1);

    if($result->num_rows >0 ){
        echo "<script>alert('Woops! Email Already Exists.')</script>";

        header("location:register.php?email_error=The email already have an account!.");

    }else if($result1->num_rows >0){

        echo "<script>alert('Woops! Username Already Exists.')</script>";
        header("location:register.php?user_error=The username already have an account!.");

    }else{

           $sqlgn="INSERT INTO `user`(`id`,`name`, `username`,`email`, `number`, `address`, `password`, `create_at`) VALUES (NULL,'$name','$username','$email','$number','$address','$password',NOW())";

           $resultgn=$conn->query($sqlgn);

           if($resultgn){

            header("location:login.php?succes=Wow! User Registration Completed.");

           }

           else{

              echo 'error occurs try agian after sometimes!';

           }

        }  
        ?>
       
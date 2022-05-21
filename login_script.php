<?php
require_once("conn.php");

$username = $_POST['username'];

$password = $_POST['password'];

session_start();

     $sql = "SELECT * FROM user WHERE email='$username' or username='$username'";

     $result = $conn->query($sql);

     if($result->num_rows > 0){

         while($row = $result->fetch_assoc()){

         $user_id=$row['userid'];

         $name=$row['name'];

         $db_username=$row['username'];  

         $email=$row['email'];

         $db_password=$row['password'];

        }

        if($username==$email || $username==$db_username){

            if(md5($password)==$db_password){

                $_SESSION['user_id']=$user_id;

                $_SESSION['name']=$name;

                $_SESSION['email']=$email;

                header("location:dashboad.php");

                }

             else{

               header("location:login.php?pass=Please Enter valid password");

                }          

        }

     }

     else{

            header("location:login.php?userr=Username or email is not Register!.");

         }

?>
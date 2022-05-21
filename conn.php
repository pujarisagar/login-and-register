<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

$conn=mysqli_connect("localhost","root","","sagar");
if(!$conn){
   die ("connection Error: " .mysqli_connect_error());
}

?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="insert into footer3 values( '','$name', '$email','$message')";
$result=mysqli_query($con,$q)or die(mysqli_error($con));
/*echo "slider data saved sucessfully";*/
header('location:index.php');
?>
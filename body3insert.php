<?php
$title=$_POST['title'];
$details=$_POST['details'];
$img=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"images/$img");
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="insert into body3 values( '','$title', '$details','$img')";
$result=mysqli_query($con,$q)or die(mysqli_error($con));
echo "slider data saved sucessfully";
header('location:index.php');
?>
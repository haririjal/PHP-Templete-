<?php
$name=$_POST['name'];
$street=$_POST['street'];
$town=$_POST['town'];
$postal=$_POST['code'];
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$suntofri=$_POST['hours'];
$sat=$_POST['hour'];



$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="insert into footer2 values( '','$name', '$street','$town','$postal', '$tel','$fax','$email', '$suntofri','$sat')";
$result=mysqli_query($con,$q)or die(mysqli_error($con));
echo "slider data saved sucessfully";
/*header('location:index.php');*/
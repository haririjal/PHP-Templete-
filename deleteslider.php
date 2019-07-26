<?php
$sn=$_GET['sn'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'3rdsemdynamic') or die(mysqli_error($con));
$q = "delete from slider where sn=$sn";
$result = mysqli_query($con,$q);
if($result){
	echo "Data changed at $sn";
	header("location:dashboard.php");
}
else
{
	die(mysqli_error($con));
}



?>
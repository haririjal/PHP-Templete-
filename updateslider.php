<?php
$sn=$_POST['sn'];
$title = $_POST['title'];
$details = $_POST['details'];

$image=$_FILES['img']['name'];
if($image==""){
	$q = "update slider set title='$title', details='$details'  where sn=$sn";
}else{
	$q = "update slider set title='$title', details='$details',  image='$image'  where sn=$sn";
	move_uploaded_file($_FILES['img']['tmp_name'], "images/$image");
}

$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,"3rdsemdynamic") or die(mysqli_error($con));

$res = mysqli_query($con,$q) or die(mysqli_error($con));
echo "Your entry has been registered";
header("location:dashboard.php");

?>
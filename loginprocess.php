<?php
		session_start();
		if(isset($_POST['btn'])){
			$username=$_POST['username'];
			$password=$_POST['password'];

			$q="select * from session where username='$username' and password='$password'";

			$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
			$db = mysqli_select_db($con,"3rdsemdynamic") or die(mysqli_error($con));
			$res = mysqli_query($con,$q) or die(mysqli_error($con));
			if(mysqli_affected_rows($con)>0){
				 $_SESSION['username']=$username;
				header('location:index.php');

			}else{
				die('login unsuccess');
			}
		}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="loginForm.php">
		UserName : <input type="text" name="username"><br>
		Password : <input type="Password" name="password"><br>
		<input type="submit" name="btn" value="LogIn">
	</form>
</body>
</html>
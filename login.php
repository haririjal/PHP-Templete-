<?php
    session_start();
    if(isset($_POST['btn']))
    {
      $username=$_POST['username'];
      $password=$_POST['password'];

      $q="select username, password from session where username='$username' and password='$password'";

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
<!-- ===================== -->
<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#field{
      height: 30px;
      width: 300px;
      border-radius: 25px  solid #97455F;

    }
    #bborder{
      width: 500px;
      height: 500px;
      border: 3px solid #97455F;
      margin-left: 30%;
      box-shadow: 0px 0px 5px 5px #888888;


    }
    #bbody{
      height: 520px;

    }
    #ssubmit{
      size: 25px;
      height: 30px;
      width: 80px;
      background-color: #97455F;
      color:white;
    }
    
		
	</style>
</head>
<body> 
	<div id="bbody">
		<p align="center"><div id="bborder" >
		<br> <br>
<h2 align="center"> <u> Login Form </u></h2><br> <br>
<label > 
<form>
  <p align="center">  <b>Username: </b><br> <input type="text" name="" id="field" placeholder="Username" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  
  <b>Password:</b><br><input type="password" name=""id="field" placeholder="Password" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  

  
  <input type="submit" name="" value="Login" id="ssubmit" style="border-color: #97455F; border-radius: 5px; font-size:15px; "> 
  </p>
  
  <p align="center"> <a href="signup.php" style="text-decoration: none; font-size: 20px; "> Create Account </a> </p>


</form>
</label> </div></p>
</div>
</body>
</html>


<?php
include "footer.php";
?>
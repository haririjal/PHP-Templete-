<?php
session_start();
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
      height: 580px;
      border: 3px solid #97455F;
      margin-left: 30%;
      box-shadow: 0px 0px 5px 5px #888888;


    }
    #bbody{
      height: 600px;

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
    <br> 
<h2 align="center"> <u> Signup Form </u></h2><br> <br>
<label > 
<form method="post" action="signup.php">
  <p align="center">  <b>Username: </b><br> <input type="text" name="username" id="field" placeholder="Username" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  <b>Email:</b> <br> <input type="Email" name="email" id="field" placeholder="Email" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  <b>Password:</b><br><input type="password" name="password"id="field" placeholder="Password" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  <b>Re-Password:</b> <br><input type="password" name="repassword" id="field" placeholder="Re-Password" style="border-radius: 5px;padding-left: 10px;font-size: 18px; border-color:#97455F; " required><br><br>
  <input type="checkbox" name="checkbox" id="check"  required> I understand the terms and conditions.<br> <br>

  
  <input type="submit" name="btn" value="Register" id="ssubmit" style="border-color: #97455F; border-radius: 5px; font-size:15px;"> 
  </p>
  
  <p align="center"> <a href="login.php" style="text-decoration: none; font-size: 20px; "> I have an account. </a> </p>


</form>
</label> </div></p>
</div>


<?php

    
    if(isset($_POST['btn']))
    {

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];
  $checkbox=$_POST['checkbox'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"3rdsemdynamic");
$q="insert into session values('','$username','$email','$password','$repassword', '$checkbox')";
$result=mysqli_query($con,$q)or die(mysqli_error($con));
header('location:index.php');
}
?>
</body>
</html>
<?php
include "footer.php";
?>

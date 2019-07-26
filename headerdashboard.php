<?php
		session_start();
		if(!(isset($_SESSION['username']))){
				header('location:login.php');
		}
?>
<html>
<head>
<style>
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #0040ff;
}

li {
float: left;
}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li a:hover {
background-color: #111;
}
.submenu{
	position: absolute;
	display: none;
	top:25px;
}
.submenu>a{
	text-decoration: none;
	background-color: green;
	padding: 10px 30px;
	display: block;
	color:white;
	transition: background-color 2s;
	
}
.submenu>a:hover{
	background-color:orange;
}
#dropdown{
	position: relative;
}
</style>
</head>
<body>

<ul>

<li><a href="index.php">Visit Site</a></li>
<li id='dropdown'>
				<a href="">Dashboard</a>
<div class="submenu">
					<a href="">Slider </a>
					<a href="">Body</a>
					<a href="">Footer</a>
					</div>
				</li>
<li><a href="dashboard.php">Slider</a></li>
<li><a href="dashboard.php">Body</a></li>
<li><a href="dashboard.php">Footer</a></li>



</ul>

</body>
</html>

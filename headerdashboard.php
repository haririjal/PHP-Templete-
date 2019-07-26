<?php
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
</style>
</head>
<body>

<ul>

<li><a href="index.php">Visit Site</a></li>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="dashboard.php">Slider</a></li>
<li><a href="dashboard.php">Body</a></li>
<li><a href="dashboard.php">Footer</a></li>



</ul>

</body>
</html>

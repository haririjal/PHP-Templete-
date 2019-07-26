<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<style type="text/css">
#dropdown{
	position: relative;
}
.submenu{
	position: absolute;
	display: none;
	top: 25px;

}

.submenu>a{
	text-decoration: none;
	background-color: green;
	padding:10px 30px;
	display:block;
	color: white;
	margin-top: 20px;
	padding: 20px 30px;
}
.submenu>a:hover{
	background-color: red;


}
#dropdown:hover .submenu	{
	display: block;
}
	
</style>

<body onload="display();">
<div id="header">
			<div id="top_header">
				<div id="top_header_left">
					<ul>
						<li><a href="https://np.linkedin.com/" target="_blank"><img src="image/linkedin.jpg"></a></li>
						<li><a href="https://www.twitter.com/" target="_blank"><img src="image/twitter.jpg"></a></li>
						<li><a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank"><img src="image/googleplus.png"></a></li>
						<li><a href="https://www.facebook.com" target="_blank"><img src="image/facebook.PNG"></a></li>
						<li><a href="https://www.instagram.com/" target="_blank"><img src="image/instagram.png"></a></li>
					</ul>
				</div>
				<div id="top_header_right">
					<ul>
						<li><a href="signup.php" >Sign Up &nbsp|</a></li>
						<li><a href="login.php" >Log In &nbsp|</a></li>
						<li><a href="#" target="_blank">RSS Feed &nbsp|</a></li>
						<li><a href="#" target="_blank">Archived Items</a></li>
					</ul>
				</div>
			</div>
				<div id="middle_header">
					<div id="middle_header_left">
						<h1>IMAGINATIVE&nbsp;&nbsp;</h1>&nbsp;
						<p>&nbsp;&nbsp;&nbsp;Free psd<br>&nbsp;&nbsp;&nbsp;Web Template</p>
					</div>
					<div id="middle_header_right">
						<input type="text" placeholder="Search Out Website...">
						<button>SUMBIT</button>
					</div>
				</div>
			<div id="bottom_header">
				<div><a href="index.php">HOME</a></div>
				<div><a href="#" >Style Demo</a></div>
				<div><a href="#" >Full Width</a></div>

				<div id="dropdown"><a href="#"  >Dropdown</a>
					
				</div>
				
		
		
				<div><a href="gallery.php" >Gallery</a></div>
				<div><a href="#" >Long Text Link</a></div>
			</div>
		</div>

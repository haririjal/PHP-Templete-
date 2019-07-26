<?php
include 'headerdashboard.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
<?php
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from slider";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
?>


	<h1 align="center"><b><u> Dashboard </u></b></h1> <br><br>
	<h2 align="center"> Slider</h2>
	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<th>SN</th>
			<th >Title</th>
			<th>Details</th>
			<th>Image</th>
			<th colspan="4">Action</th>
		</tr>
			<?php
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			echo "<tr>";
			echo "<td>".$arr['sn']."</td>";
			echo "<td>".$arr['title']."</td>";
			echo "<td>".$arr['details']."</td>";
			echo "<td>".$arr['image']."</td>";
			echo "<td><a  href='sliderform.php?sn=".$arr['sn']."'>Add</a></td>";
			echo "<td><a  href='sliderupdateform.php?sn=".$arr['sn']."'>Edit</a></td>";
			echo "<td><a href='deleteslider.php?sn=".$arr['sn']."' onclick='return confirm(\"Are you sure to delete?\");'>Delete</a></td>";
			echo "<td><a href='index .php?sn=".$arr['sn']."'>View</a></td>";
			echo "</tr>";

	}
?>
	</table>

</body>
</html>
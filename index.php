<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>

<body onload="display();">
	<?php
include "header.php";
?>
<!-- ========================================================================== -->



	<script type="text/javascript">
		var index=0;
		var timeout;
function currentSlide(n){
	index=n;
	display();
}


		function pre(){
			index--;
			if(index<0){
				var sliders=document.getElementsByClassName('slider');
				index=sliders.length-1;
			}
			display();
		}

		function next(){
			index++;
			var sliders=document.getElementsByClassName('slider');
			if(index>=sliders.length){
				index=0;
			}
			display();
		}
		function display(){
			var sliders=document.getElementsByClassName('slider');
			for(var i=0;i<sliders.length;i++){
				sliders[i].style.display='none';
			}
				sliders[index].style.display='block';
			clearTimeout(timeout);
			timeout=setTimeout(next,5000);
		}
	</script>

	
	<div class="slider-container">
		<?php 
		
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from slider";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){



		?>

		<div class="slider">
			<img src="images/<?php echo $arr['image'];?>">
			<div class="text-container">
				<p><?php  echo $arr['title']; ?></p>
				<span><?php echo $arr['details'];?></span>
			</div>

			<div class="pre" onclick="pre();"></div>
			<div class="next" onclick="next();"></div>
		</div>

	<?php } ?>

		<div class="dots">
			<div onclick="currentSlide(0);"></div>
			<div onclick="currentSlide(1);"></div>
			<div onclick="currentSlide(2);"></div>
			<div onclick="currentSlide(3);"></div>
			<div onclick="currentSlide(4);"></div>
		</div>


	</div>


	




	</div> <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br> 


<!-- ================================================================ -->


<br>
	

	<div id="pbody">
		<div id="phr">
			<hr>
		</div>
		<div id="ptext">
			<b>Your Text Here </b>
		</div><br>
		<div class="icons">
			<?php 
		
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from body1 ORDER BY SN DESC LIMIT 6";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				?>
				

			<div class="iac">
				<img src="images/<?php echo $arr['image'];?>">
				<span><?php echo $arr['title'];?></span>
				<br>
				<text ><?php echo $arr['details'];?></text>
			</div>
			<?php
		}
?>
	

		</div></div> <Br><br>
				<br><br>
				<br>

<div class="abc">
	<div id="hrone"><hr style="height: 4px; width: 600px;   background-color:#EBEBEB; "><p id="hrtext1"><b> Your Text Here</b> </p></div>
	<div id="hrtwo"><hr style="height: 4px; width: 600px;  background-color:#EBEBEB;  "><p id="hrtext2"><b> Your Text Here</b> </p></div></div>
</div></div>

<div class="xyz">
<div id="xyzone"> 
						<?php 
		
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from body2 ORDER BY SN DESC LIMIT 1";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				?>
				

			<div class="p2image">
				<img src="images/<?php echo $arr['image'];?>">
				<span id="ppredtext"> <b><?php echo $arr['title'];?></b> </span>
				<br> <p style="color: black;">
				<span > <?php echo $arr['details'];?> <span id="dots">.........</span><span id="more">More text heMore text heMore text heMore text heMore text heMore text heMore text heMore text heMore here</span></p>
							<a   style="cursor: pointer; color: blue; margin-top: -20px; margin-left: 300px; margin-right: 230px; display:block; background-color: yellow;"  onclick="myFunction()" id="myBtn"> Read more </a></span></p>
			</div>
			<?php
		}
?>
	
				
				 





					</div>
				
<div id="xyztwo"><div id="ppredtext1"><b style="font-size: 20px; margin-left: 10px; display: block; float: left;">
<?php
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from body3 ORDER BY SN DESC LIMIT 1";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				?>

							<img src="images/<?php echo $arr['image'];?>">
							<?php echo $arr['title'];?> </b><br>
							<a href="about.php" target="_blank" id="pview"> View This Project >></a>
						</div>
						
	<div> <p id="ppblacktext1">
							<?php echo $arr['details'];?> </p>
						</div></div>
						<?php
		}
?>
</div>

				
				


<div name="SignUp" class="signup">
			 <div name="contact" class="contact" >
			 	<span>CONTACT US TODAY</span>
			 </div>
			 <p id="pbig"><b  style="font-size: 40px;">Orciinterdum Corper Elit Nam ?</b> <br>
                    	Orciinterdum condimen urabitur laoreet met praesenean et iac ! </p>
                    </div>
                    
                </div>
                <br>
                    <br> <br>
                    <br>
<script type="text/javascript">
	function myFunction() {
		
		var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

	



	<?php
	include'footer.php';
	?>
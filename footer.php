<!--footer.php-->
<div class="whole_footer"><div>
	<div >
		<hr id="horizontal_line">
	</div>


<div>
	<div id="first_content"> 

		<div id="title1"> <H2> Latest From The Blog </H2></div>
		<div ><?php 
		
$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from footer1 ORDER BY SN DESC LIMIT 2;";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				?>
				 <img src="images/<?php echo $arr['image'];?>" id="first_image" >
				<div id="text1"> <b> <?php echo $arr['title'];?></b></div> <br>
				<div >  <?php echo $arr['details'];?>
				 </div>
				 <br>
				 <br>
				 
				
				 <?php
				}
				?>


	</div>
</div>


		<div>
			<div id="second_content">
				<div id="title2"> <h2>  Company Details </h2></div> 
				<div>
					<?php
				$con=mysqli_connect('localhost','root','') or die('cannot connect to db');
mysqli_select_db($con, "3rdsemdynamic");
$q="select * from footer2";
$result=mysqli_query($con,$q) or die(mysqli_error($con));

		$arr=mysqli_fetch_assoc($result)
				?> 
					<p>Name: <?php echo $arr['name'];?><br>
				Street: <?php echo $arr['street'];?><br>
				Town: <?php echo $arr['town'];?><br>
				Postal: <?php echo $arr['postal'];?><br>
				<br>
				Tel: <?php echo $arr['tel'];?><br>
				Fax: <?php echo $arr['fax'];?><br>
				Email: <?php echo $arr['email'];?>  <br>
				<br>

				<b>Office Hours</b><br>
				Monday-Friday: <?php echo $arr['suntofri'];?><br>
				Saturday: <?php echo $arr['sat'];?><br> </p>
				</div>
				</div>
			</div>
		








		<div>
			<div id="third_content">
				<div id="title3"><h2>Contact Us</h2></div>
				<div id="hinput">
					<form action="footer3.php" method="post">
			<input type="text" name="name" placeholder="Name" class="hinput" id="nam" required>
			<br>
			<br>
			<input type="email"  placeholder="Email" class="hinput" id="eid" name="email" required>
			<br><br>
			<textarea rows="10"  placeholder="Message" class="htextarea2" id="msg" name="message" required></textarea><br><br>
			<input type="submit"  class="hsubmit" style="border-color: #97455F;" > 
		</form>
			</div>
				
			</div>
		</div> </div></div></div>

		<div id="lasthr"> <hr> </div>
<div>
	<div id="copyright">  Copyright © 2019 - All Right Reserved - (Group B)</div>
	<div id="website_by"> Template by BIM Section B (Group B)</div>
</div>


<script type="text/javascript">
	/*var a=document.getElementById('nam');
		var b=document.getElementsById('eid');
		var c=document.getElementsById('msg');
	function validate(){
		
if(a.value=="" || b.value=="" || c.value==""){
				alert('field is empty !!');
			}
			
}*/
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

</body>
</html>
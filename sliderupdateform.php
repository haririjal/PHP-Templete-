
<?php
$con=mysqli_connect('localhost','root','') or die('can not connect to db');
mysqli_select_db($con,"3rdsemdynamic");
$sn=$_GET['sn'];
$q="Select * from slider where sn= $sn";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_assoc($result);
 ?>
 
     </style>
   </head>
   <body>


<div class="container">
  <h1 align="center">Update Data</h1>


     <form class="" action="updateslider.php" method="post" enctype="multipart/form-data">


     <input type="hidden" name="sn" value="<?php   echo $arr['sn']; ?>">
     Title:<input type="text" name="title" value="<?php   echo $arr['title']; ?>"><br><br>
		     Details:<textarea rows="10" cols="50" name="details" ><?php   echo $arr['details']; ?> </textarea>
    <br><br>
    Image:
  <input type="file" name="img">
           <br><br>

					 <input type="submit" name="btn" value="update" id="button">
           </form>
        </div>
   </body>
 </html>

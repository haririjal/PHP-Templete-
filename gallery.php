<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>

<body onload="display();">
<?php
include"header.php";
?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/** {
  box-sizing: border-box;
}
*/


/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  
  font-size: 15px;
}

}
/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Image Gallery</h2>
  
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="image/nature1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/nature2.jpg" alt="Mountain" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/nature3.JPEG" alt="Temple" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/nature4.jpg" alt="Flower" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>


<?php
include "footer.php";
?>
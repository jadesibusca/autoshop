<!DOCTYPE html>
<html lang="en">

<head>
<title>Auto Shop</title>
<link href="car.css" media="all" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
<header class = "banner">
<h1 class = "tit">JUAN'S AUTO PAINT</h1>
</header>
<nav class = "main-nav">
	<ul>
		<li><a href = "/newpaintjob.php"> NEW PAINT JOB </a></li>
		<li><a href = "/paintjobs.php"> PAINT JOBS </a></li>
</nav>
<main>
<h2> New Paint Job </h2>
<script>
$(document).ready(function(){
$("#curdefault").show();
$('#myselection').on('change', function(){
var demovalue = $(this).val(); 
$("div.myDiv").hide();
$("#cur"+demovalue).show();
});
});
$(document).ready(function(){
$("#tardefault").show();
$('#myselection1').on('change', function(){
var demovalue1 = $(this).val(); 
$("div.myDiv1").hide();
$("#tar"+demovalue1).show();
});
});
</script>

<div class = "cars">
<div id="curdefault" class="myDiv">
<img src= "default.png">
</div>
<div id="curgreen" class="myDiv">
<img src= "green.png">
</div>
<div id="curred" class="myDiv">
<img src= "red.png">
</div>
<div id="curblue" class="myDiv">
<img src= "blue.png">
</div>

<img src= "s.png" class = "arr">

<div id="tardefault" class="myDiv1">
<img src= "default.png">
</div>
<div id="targreen" class="myDiv1">
<img src= "green.png">
</div>
<div id="tarred" class="myDiv1">
<img src= "red.png">
</div>
<div id="tarblue" class="myDiv1">
<img src= "blue.png">
</div>
</div>

<h3> Car Details </h3>
<form action = "newpaintjob.php" method= "post">

<p class = "pn">Plate No: </p> 
<input type = "text" name ="plateno" value = " " id="pntext">

 <p class = "cc">Current Color:</p>
  <select id="myselection" name="currentcolor">
  <option style = "display:none" value = " " ></option>
<option value="green">Green</option>
<option value="red">Red</option>
<option value="blue">Blue</option>
</select>

  <p class = "tc">Target Color:</p>
  <select id="myselection1" name="targetcolor">
  <option style = "display:none" value=" " ></option>
<option value="green">Green</option>
<option value="red">Red</option>
<option value="blue">Blue</option>
</select>

<input id = "sub" type = "submit" name  = "submit" value ="Submit">

</form>


<?php
if(isset($_POST["submit"])){

$servername = "localhost";
$database = "autoshop";
$username = "admin";
$password = "1234";



$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 $plateno = $_POST['plateno'];
$currentcolor = $_POST['currentcolor'];
$targetcolor = $_POST['targetcolor'];
$sql = "INSERT INTO paintq (plateno, currentcolor, targetcolor) VALUES ('$plateno', '$currentcolor', '$targetcolor')";
if (mysqli_query($conn, $sql)) {
    
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

</main>
</body>

</html>


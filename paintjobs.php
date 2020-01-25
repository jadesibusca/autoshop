<!DOCTYPE html>
<html lang="en">

<head>
<title>Auto Shop</title>
<link href="paintjobs.css" media="all" rel="stylesheet" type="text/css"/>
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
    <div id = "GG">
<h2> Paint Jobs </h2>


<h3 id = "inprogress"> Paint Jobs in Progress </h3>
<table class = "inprogress">
<tr>
<th>Plate No.</th>
<th>Current Color</th>
<th>Target Color</th>
<th>Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "admin", "1234", "autoshop");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT plateno, currentcolor, targetcolor from paintq";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["plateno"]. "</td><td>" . $row["currentcolor"] . "</td><td>"
. $row["targetcolor"]. "</td><td>" . "<form><input name ='sb' id = 'sb' type=submit style='border: none;
background: none;' value='Mark as Completed' ></form>" ."</td></tr>";
}
echo "</table>";
} else { }
$conn->close();
?>
</table>

<h3 id ="queue"> Paint Queue </h3>
<table class = "queue">
<tr>
<th>Plate No.</th>
<th>Current Color</th>
<th>Target Color</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "admin", "1234", "autoshop");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT plateno, currentcolor, targetcolor from paintinprogress";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["plateno"]. "</td><td>" . $row["currentcolor"] . "</td><td>"
. $row["targetcolor"]. "</td></tr>";
}
echo "</table>";
} else {  }
$conn->close();
?>


</table>
</div>

<!-- <table class = "perf">
<tr>
<th>Shop Performance</th>


</tr>
-->
<?php
$conn = mysqli_connect("localhost", "admin", "1234", "autoshop");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM painted";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["red"]. "</td><td>" . $row["blue"] . "</td><td>"
. $row["green"]. "</td></tr>";
}
echo "</table>";
} else {  }
$conn->close();
?>
</table>

<?php
/*
if(isset($_POST["sb"])){

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


$sql = "INSERT INTO painted SELECT * FROM paintq WHERE id = '$id'";
$sql = "DELETE FROM paintq WHERE paintq = '$id'";
if (mysqli_query($conn, $sql)) {
    echo $id;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
*/
?>


</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
   
        setInterval('refreshPage()', 5000);
    });

    function refreshPage() { 
        location.reload(); 
    }
</script>

  


</body>

</html>


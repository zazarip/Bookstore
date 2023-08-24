<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Pickup updated </title>
	</head>
<style>
body {background-image:url(image/booksbg.jpg);
    background-color: lightYellow;}
</style>
<body>
	<h1> Pick Up Updated</h1>
<?php
include 'conn.php';
$pickupid = $_GET['pickupid'];
$update= "UPDATE pickup SET Date_pickup= '$_POST[datepickup]' where Pickup_ID=$pickupid";

if(!mysqli_query($conn, $update)){
	die('Error: '.mysqli_error($conn));
}
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Pickup ID</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Username</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Phone Number</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Date Pickup</th></tr>";
$result= mysqli_query($conn, "select * from pickup");
$row= mysqli_fetch_row($result);

echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[0]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[1]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[3]</td>";
	echo "</tr>";
	
	echo "</table><br><br>";

mysqli_free_result($result);
mysqli_close($conn);
?>
<button onclick= "document.location= 'pickup.php'">Back to Pick Up</button>
</body>
</html>
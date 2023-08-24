<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Edit Pickup </title>
	</head>
<style>
body {background-image:url(image/booksbg.jpg);
    background-color: lightYellow;}
</style>
<body>
	<h1> Update User Profile </h1>
<?php
include 'conn.php';
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Pickup ID</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Username</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Phone Number</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Date Pickup</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Action</th></tr>";
if(isset($_GET['pickupid'])){
$pickupid = $_GET['pickupid'];
$result = mysqli_query($conn, "select * from pickup where Pickup_ID=$pickupid");
$row= mysqli_fetch_row($result);

echo "<form action= editpickupprocess.php?ui= $row[0] method= post>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[0] readonly</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[1]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue><input type= text name= datepickup value= '$row[3]'></td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue><input type= submit value= Update></td>";
	echo "</tr>";
	
echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);}
?>
</body>
</html>
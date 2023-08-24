<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Cash payment details</title>
</head>
<style>
body {background-image:url(image/booksbg.jpg);
    background-color: lightYellow;}
.container{
    background-color: LightSalmon;
    padding: 40px 60px;
    width: 40%;
    min-width: 200px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 5px;
    font-family: 'Garamond',serif;
    box-shadow: 25px 25px 30px rgba(0,0,0,0.15);
}
</style>
<body style="text-align:center">
	<div class="container">
	<h1> Cash Payment Details </h1>
<?php
if($_SESSION["Cust_username"]){?>
<?php 
$result = mysqli_query($conn, "select * from purchase where Purchase_ID");
$row = mysqli_fetch_row($result);
	echo "<fieldset>";
	echo "Purchase ID : $row[0]<br>";
	echo "Total price : RM$row[3]<br>";
	echo "Payment type : $row[5]<br>";
	echo "Customer username : $row[6]<br>";
	echo "Seller ID : $row[7]<br>";
	echo "</tr>";
	echo "</fieldset><br>";
	mysqli_free_result($result);
mysqli_close($conn);
}?>
<button onclick= "document.location= 'display_receipt.php'">Confirm</button>
</body>
</html>
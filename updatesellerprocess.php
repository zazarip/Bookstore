<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Seller updated </title>
	</head>
<style>
body {background-image:url(image/booksbg.jpg);
    background-color: lightYellow;}
.container{
    background-color: khaki;
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
	<h1> Seller Profile Updated</h1>
	<?php
if($_SESSION["Seller_ID"]){?>
<?php

$update= "UPDATE seller SET Seller_name= '$_POST[name]',
 Seller_email= '$_POST[em]' where Seller_ID= '$_SESSION[Seller_ID]'";

if(!mysqli_query($conn, $update)){
	die('Error: '.mysqli_error($conn));
}

$result= mysqli_query($conn, "select * from seller where Seller_ID= '$_SESSION[Seller_ID]'");
$row= mysqli_fetch_row($result);

echo "Name: $row[3]<br>Email: $row[1]<br><br>";

mysqli_free_result($result);
mysqli_close($conn);
}?>
<button onclick= "document.location= 'sellerprofile.php'">Back to Profile</button>
</body>
</html>
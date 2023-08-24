<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Delete Account </title>
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
	<h1> Account Deleted </h1>
<?php
if($_SESSION["Cust_username"]){?>
<?php
$delete = "delete from customer where Cust_username='$_SESSION[Cust_username]'"; 
if(!mysqli_query($conn, $delete))
{
	die('Error: '.mysqli_error($conn));
}
echo "Succesfully Deleted <br><br>";
echo "<td><a href = index.php>Exit</a>";
mysqli_close($conn);
}?>
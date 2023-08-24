<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> User updated </title>
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
	<h1> User Profile Updated</h1>
<?php
if($_SESSION["Cust_username"]){?>
<?php
$update= "UPDATE customer SET Cust_email= '$_POST[em]',
 Cust_phonenum= '$_POST[phonenum]' where Cust_username='$_SESSION[Cust_username]'";

if(!mysqli_query($conn, $update)){
	die('Error: '.mysqli_error($conn));
}

$result= mysqli_query($conn, "select * from customer where Cust_username='$_SESSION[Cust_username]'");
$row= mysqli_fetch_row($result);

echo "Username: $row[0]<br>Email: $row[2]<br>Phone Number: $row[3]<br><br>";

mysqli_free_result($result);
mysqli_close($conn);
}?>
<button onclick= "document.location= 'profile.php'">Back to Profile</button>
</body>
</html>
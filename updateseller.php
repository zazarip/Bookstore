<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Update Customer </title>
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
	<h1> Update Profile </h1>
<?php
if($_SESSION["Seller_ID"]){?>
<?php
$result= mysqli_query($conn, "select * from seller where Seller_ID= '$_SESSION[Seller_ID]'");
$row= mysqli_fetch_row($result);

echo "<form action= updatesellerprocess.php?ui= $row[0] method= post>";
echo "<fieldset>";
echo "<legend> ACCOUNT DETAILS </legend><br>";
echo "Name: <input type= text name= name value= '$row[3]'><br><br>";
echo "Email: <input type= text name= em value= '$row[1]'><br><br>";

echo "</fieldset><br>";
echo "<input type= submit value= CONFIRM>";
echo "&nbsp;&nbsp;&nbsp;";

mysqli_free_result($result);
mysqli_close($conn);
}?>
</body>
</html>
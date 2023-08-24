
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
	<h1> Update User Profile </h1>
<?php
if($_SESSION["Cust_username"]){?>
<?php
$result= mysqli_query($conn, "select * from customer where Cust_username='$_SESSION[Cust_username]'");
$row= mysqli_fetch_row($result);

echo "<form action= updatecustprocess.php?ui= $row[0] method= post>";
echo "<fieldset>";
echo "<legend> ACCOUNT DETAILS </legend><br>";
echo "Email: <input type= text name= em value= '$row[2]'><br>";
echo "Phone Number: <input type= text name= phonenum value= '$row[3]'><br>";
echo "</fieldset><br>";
echo "<input type= submit value= Update>";
echo "&nbsp;&nbsp;&nbsp;";

mysqli_free_result($result);
mysqli_close($conn);
}?>
</body>
</html>
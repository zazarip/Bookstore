<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Profile | Customer </title>
	</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

	*,
    *:before,
    *:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

img {
  border-radius: 150%;
}

body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}

h1{ text-align: center;
	 font-family: 'Garamond',serif;
	 font-size: 40px;}
fieldset{ margin:10px;}
p {text-align: center;}
fieldset{text-align: center;}

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
ul {
	list-style-type:none;
	margin:2px;
	padding:0;
	overflow:hidden;
    background-color: khaki;
	}

	li{
	float:left;
	font-family: 'Garamond',serif;
	font-size: 24px;
	}
		
	li a {
	display:block;
	color:black;
	padding: 14px 16px;
	text-decoration:none;
	}
		
	li a:hover{
	background-color:lightSkyBlue;
	color:lemonChiffon;
	}	
	
	.navbar-nav>a {
    color: white;
    }	
</style>
</head>
<div>
	<ul class="navbar-nav">
		<li class="nav-item"><a href="homepage-css.php" ><b><u>Home</u></b></a></li>
		<li class="nav-item"><a href="profile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="purchase.php" ><b><u>My Purchases</u></b></a></li>
	</ul>
	</div>
	
	<h1> User Profile Page </h1>
	<body style="text-align:center">
	<div class="container">
	<p><p class="center"><img height=150 width=350 src="images/Sohee.png" alt="Avatar"></p><br><br>
	
<?php
if($_SESSION["Cust_username"]){?>
<?php
$result= mysqli_query($conn, "select * from customer where Cust_username='$_SESSION[Cust_username]'");

while($row= mysqli_fetch_row($result)){
echo "<fieldset>";
echo "<legend> ACCOUNT DETAILS </legend><br>";
echo "<label> Username: </label>";
echo "<tr><td>$row[0]</td>";
echo "<br><br>";
echo "<label> Email: </label>";
echo "<tr><td>$row[2]</td>";
echo "<br><br>";
echo "<label> Phone Number: </label>";
echo "<tr><td>$row[3]</td><br><br>";
echo "</fieldset>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);
}?>
	
	<button onclick= "document.location= 'delete.php'">Delete Account</button>&emsp;&nbsp;
	<button onclick= "document.location= 'updatecust.php'">Edit Info</button>&emsp;&nbsp;
	<button onclick= "document.location= 'custlogout.php'">Logout</button>&emsp;&nbsp;
	</body>
	
</html>
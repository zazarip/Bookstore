<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Profile | Seller </title>
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

body {
    background-color: lightYellow;
}

h1{ text-align: center;
	 font-family: 'Garamond',serif;
	 font-size: 40px;}
fieldset{ margin:10px;}
p {text-align: center;}
fieldset{text-align: center;}

.container{

    background-color: khaki;
    padding: 10px 60px;
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
    col
	

</style>
</head>
<div>
	<ul class="navbar-nav">
	<li class="nav-item"><a href="sellerprofile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="display_books.php" ><b><u>Update Books</u></b></a></li>
		<li class="nav-item"><a href="pickup.php" ><b><u>Pick up</u></b></a></li>	
	
	</ul>
	</div>
	
	<h1>Seller Profile</h1>
	<body style="text-align:center">
	<div class="container">
	<p class="center"><img height=160 width=200 src="images/seller.jpg"></p><br>
<?php
if($_SESSION["Seller_ID"]){?>	
<?php
$result= mysqli_query($conn, "select * from seller where Seller_ID='$_SESSION[Seller_ID]'");

while($row= mysqli_fetch_row($result)){
echo "<fieldset>";
echo "<legend> ACCOUNT DETAILS </legend><br>";
echo "<label> Name: </label>";
echo "<tr><td>$row[3]</td>";
echo "<br><br>";
echo "<label> Email: </label>";
echo "<tr><td>$row[1]</td>";
echo "<br><br>";
echo "</fieldset>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);
}?>
	
	<button onclick= "document.location= 'updateseller.php'">Edit Info</button>&emsp;&nbsp;
	<button onclick= "document.location= 'sellerlogout.php'">Logout</button>&emsp;&nbsp;
	</body>
	
</html>
<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Purchase | Customer </title>
	</head>
<head>
<style>
body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}
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
<?php
if($_SESSION["Cust_username"]){?>
<p align="center"> Current User: <?php echo $_SESSION["Cust_username"];}?></p>
<?php
if($_SESSION["Cust_username"]){?>
<?php 
echo "<h1>My purchase</h1>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Book Title</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Book Price</th></tr>";
$result = mysqli_query($conn, "select * from books where Cust_username='$_SESSION[Cust_username]'");
while($row = mysqli_fetch_row($result)){
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>RM$row[1]</td>";
	echo "</tr>";}
	
	echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
}?>
</html>
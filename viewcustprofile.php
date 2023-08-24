<?php session_start();
  include 'conn.php';?>
  
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Customer Details| Admin</title>
		<style>
		body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}
	h3 {font-family: 'Garamond',serif;}
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
<body>	
<div>
	<ul class="navbar-nav">
		<li class="nav-item"><a href="viewcustprofile.php" ><b><u>User Lists</u></b></a></li>
		<li class="nav-item"><a href="viewpurchase.php" ><b><u>Purchased items</u></b></a></li>
		<li class="nav-item"><a href="adminlogout.php" ><b><u>Logout</u></b></a></li>
	</ul>
	</div>
 <?php
	if($_SESSION["Adm_name"]){?>
	<p align="center"> Current User: <?php echo $_SESSION["Adm_name"];}?></p>
<?php 
echo "<h2>User Lists</h2>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=30% class='center' bgcolor=pink>
<tr><th>Customer username</th><th>Customer email</th><th>Customer number</th>";
echo "<th> Action </th>";
$result = mysqli_query($conn, "select * from customer");
while($row = mysqli_fetch_row($result)){
	echo "<tr><td>$row[0]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td><a href = deletecust.php?Cust_username=$row[0]>Delete </a>";
	echo "</tr>";}
	
	echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>

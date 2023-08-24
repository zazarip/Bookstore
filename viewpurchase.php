<?php session_start();
  include 'conn.php';?>
  
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset = "UTF-8">
		<title>View Purchase | Admin</title>
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
		<li class="nav-item"><a href="viewcustprofile.php" ><b><u>User Lists</u></b></a></li>
		<li class="nav-item"><a href="viewpurchase.php" ><b><u>Purchased items</u></b></a></li>
		<li class="nav-item"><a href="adminlogout.php" ><b><u>Logout</u></b></a></li>
	</ul>
	</div>
<body>
 <?php
	if($_SESSION["Adm_name"]){?>
	<p align="center"> Current User: <?php echo $_SESSION["Adm_name"];}?></p>
<?php
echo "<h3>Items purchased by Customers</h3>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Purchase ID</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Date & Time Purchase</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>No Purchase</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Total Price</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Payment Type</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Username</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Seller ID</th></tr>";
$result = mysqli_query($conn, "select * from purchase where Purchase_ID");
while($row = mysqli_fetch_row($result)){
	echo "<tr><td colspan=1 rowspan=1 bgcolor=lightblue>$row[0]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[1]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[3]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[5]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[6]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[7]</td>";
	echo "</tr>";}
	echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);	
?>
</body>
</html>
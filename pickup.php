<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title>Pick Up | Seller </title>
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
<body>
<div>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="sellerprofile.php"><b><u>Profile</u></b></a></li>
        <li class="nav-item"><a href="display_books.php"><b><u>Update Books</u></b></a></li>
        <li class="nav-item"><a href="pickup.php"><b><u>Pick up</u></b></a></li>
    </ul>
</div>
<?php
include 'conn.php';
echo "<h2>Pick Up Details</h2>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr>
    <th bgcolor=lightblue>Purchase ID</th>
    <th bgcolor=lightblue>Customer Username</th>
    <th bgcolor=lightblue>Customer Phone Number</th>
    <th bgcolor=lightblue>Date Pickup</th>
</tr>";

$query = "SELECT p.Purchase_ID, c.Cust_username, c.Cust_phonenum, c.Date_pickup
          FROM purchase p
          JOIN pickup c ON p.Cust_username = c.Cust_username";
          

$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td bgcolor=lightblue>{$row['Purchase_ID']}</td>";
    echo "<td bgcolor=lightblue>{$row['Cust_username']}</td>";
    echo "<td bgcolor=lightblue>{$row['Cust_phonenum']}</td>";
    echo "<td bgcolor=lightblue>{$row['Date_pickup']}</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
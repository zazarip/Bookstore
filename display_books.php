<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Display Books | Seller</title>
<meta charset="UTF-8">
<style>
body {background-image:url(images/booksbg.jpg);
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
		<li class="nav-item"><a href="sellerprofile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="displaybooks.php" ><b><u>Update Books</u></b></a></li>
		<li class="nav-item"><a href="pickup.php" ><b><u>Pick up</u></b></a></li>
	</ul>
	</div>
	 <?php
	if($_SESSION["Seller_name"]){?>
	<p align="center"> Current User: <?php echo $_SESSION["Seller_name"];}?></p>
<?php 
echo "<h2>Update Books</h2>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Book Code</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Book Category</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Book Title</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Book Price</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Action</th></tr>";
$result = mysqli_query($conn, "select * from books");
while($row = mysqli_fetch_row($result)){
	echo "<tr><td colspan=1 rowspan=1 bgcolor=lightblue>$row[0]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[6]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[1]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue><a href=updatebook.php?bookcode=$row[0]>Update</a></td>";
	echo "</tr>";}
	
	echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
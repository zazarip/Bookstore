<?php session_start();
  include 'conn.php';?>
<!DOCTYPE html>
<html>

<head>
		<meta charset = "UTF-8">
		<title>Homepage | Customer</title>
	<style>
	
.block {
  padding: 20px;
  margin: 40px;
  display: inline-block;
  width: 200px;
  height: 200px;
  background-color: khaki;
}

.container {
  text-align: center;
  background-color: lightYellow;
}

.block img {
 width: 200px;
 height: 215px;
}

body {
  background-image:url(css/booksbg.jpg);
  backdrop-filter: blur(3px);
  background-color: lightYellow;
}

h3 {
	font-family: 'Garamond',serif;
	color: black;
	text-align: center;
	font-size: 32px;
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
<body>
 <?php
	if($_SESSION["Cust_username"]){?>
	<p align="center"> Current User: <?php echo $_SESSION["Cust_username"];}?></p>
<div class="container">
<h3>Explore Books</h3>
  <div class="block">
    <img src="images/lk.jpg">
	<?php
$result = mysqli_query($conn, "select * from books where Book_code = '10001'");
while($row = mysqli_fetch_row($result)){
	echo "<td>Book Code: $row[0]</td><br><br>";
	echo "<td>Book Category: $row[6]</td><br><br>";
	echo "<td>Book Title: $row[2]</td><br><br>";
	echo "<td>Book Price: RM$row[1]</td><br><br>";
	echo "<td><a href=bookdetails.php?bookcode=$row[0]>Book Details</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<a href=payment.php?bookcode=$row[0]>Buy</a></td>";
	echo "</tr><br><br>";}
	
mysqli_free_result($result);
	
?>
  </div>
  <div class="block">
    <img src="images/essay.jpg">
<?php

$result = mysqli_query($conn, "select * from books where Book_code = '10002'");
while($row = mysqli_fetch_row($result)){
	echo "<td>Book Code: $row[0]</td><br><br>";
	echo "<td>Book Category: $row[6]</td><br><br>";
	echo "<td>Book Title: $row[2]</td><br><br>";
	echo "<td>Book Price: RM$row[1]</td><br><br>";
	echo "<td><a href=bookdetails.php?bookcode=$row[0]>Book Details</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<a href=payment.php?bookcode=$row[0]>Buy</a></td>";
	echo "</tr><br><br>";}
	
mysqli_free_result($result);
	
?>
  </div>
  <div class="block">
    <img src="images/sherlock.jpg">
	<?php

$result = mysqli_query($conn, "select * from books where Book_code = '10003'");
while($row = mysqli_fetch_row($result)){
	echo "<td>Book Code: $row[0]</td><br><br>";
	echo "<td>Book Category: $row[6]</td><br><br>";
	echo "<td>Book Title: $row[2]</td><br><br>";
	echo "<td>Book Price: RM$row[1]</td><br><br>";
	echo "<td><a href=bookdetails.php?bookcode=$row[0]>Book Details</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<a href=payment.php?bookcode=$row[0]>Buy</a></td>";
	echo "</tr><br><br>";}
	
mysqli_free_result($result);
	
?>
  </div>
  <div class="block">
    <img src="images/matematik.jpg">
	<?php

$result = mysqli_query($conn, "select * from books where Book_code = '10004'");
while($row = mysqli_fetch_row($result)){
	echo "<td>Book Code: $row[0]</td><br><br>";
	echo "<td>Book Category: $row[6]</td><br><br>";
	echo "<td>Book Title: $row[2]</td><br><br>";
	echo "<td>Book Price: RM$row[1]</td><br><br>";
	echo "<td><a href=bookdetails.php?bookcode=$row[0]>Book Details</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<a href=payment.php?bookcode=$row[0]>Buy</a></td>";
	echo "</tr><br><br>";}
	
mysqli_free_result($result);
	
?>
  </div>
  <div class="block">
    <img src="images/hp.jpg">
	<?php

$result = mysqli_query($conn, "select * from books where Book_code = '10005'");
while($row = mysqli_fetch_row($result)){
	echo "<td>Book Code: $row[0]</td><br><br>";
	echo "<td>Book Category: $row[6]</td><br><br>";
	echo "<td>Book Title: $row[2]</td><br><br>";
	echo "<td>Book Price: RM$row[1]</td><br><br>";
	echo "<td><a href=bookdetails.php?bookcode=$row[0]>Book Details</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<a href=payment.php?bookcode=$row[0]>Buy</a></td>";
	echo "</tr><br><br>";}
	
mysqli_free_result($result);
mysqli_close($conn);	
?>
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
		<title>Homepage | Customer</title>	
		
</head>

<?php 
		include 'conn.php';
		echo "<h3>ABC BOOKSTORE</h3>";
		echo "<a href=display_books.php>Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=profile.php>Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=purchase.php>My Purchases</a><br><br>";
		echo "<br><br><br><br><br><br><br>";
		echo "<table id= 'books'><tr><th>BOOK 1</th><th>BOOK 2</th><th>BOOK 3</th></tr>";
		echo "<tr><th><img height=200 width=180 src = 'images/lk.jpg'</img></th><th><img height=200 width=180 src = 'images/essay.jpg'</img></th><th><img height=200 width=180 src = 'images/sherlock.jpg'</img></th>";
		echo "<tr><th>BOOK 4</th><th>BOOK 5</th></tr>";
		echo "<tr><th><img height=200 width=180 src = 'images/matematik.jpg'</img></th><th><img height=200 width=180 src = 'images/hp.jpg'</img></th></tr>";

		mysqli_close($conn);
?>
</html>
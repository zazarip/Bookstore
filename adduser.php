<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Sign Up Successful | Customer</title>
		<style>
		*,
    *:before,
    *:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
	
	.container{
    background-color: lightYellow;
    padding: 30px 30px;
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

    .container h2{
	background: gold;
	color: black;
	text-align: center;
	font-size: 25px;
	letter-spacing: 1px;
	margin-top: -40px;
	margin-left: -30px;
	margin-right: -30px;
	margin-bottom: 20px;
	border-radius: 5px;
    }
	
	h2{
	font-family: 'Garamond',serif;
	}
	
	h3{
	font-family: 'Garamond',serif;	
	}
	
	.active {
    font-size: 17px;
    color: green;
    }	
	
	body {
	background-image: url(css/booksbg.jpg);
	}
	
	
		</style>
	</head>
<body style="text-align:center">
	<div class="container">
	<?php
	include 'conn.php';
		
	$sql= "insert into customer (Cust_username, Cust_pass, Cust_email, Cust_phonenum) values('$_POST[username]','$_POST[password]','$_POST[em]','$_POST[phonenum]')";
		
	if (!mysqli_query($conn, $sql))
	{
		die('Error: '.mysqli_error($conn));
	}
	echo "<h2>You are now a member!</h2><br>";
	echo "<h3>Click the link below to go to our homepage.</h3><br>";
	echo "<b><a class= 'active' href= homepage-css.php>Homepage</a></b>";	
	
	mysqli_close($conn);
	?>
	</div>
	</body>
<?php
	include 'conn.php';
		
	$sql= "insert into customer (Cust_username, Cust_pass, Cust_email, Cust_phonenum) values('$_POST[username]','$_POST[password]','$_POST[em]','$_POST[phonenum]')";
		
	if (!mysqli_query($conn, $sql))
	{
		die('Error: '.mysqli_error($conn));
	}
	echo "<h2>You are now a member!</h2><br>";
	echo "<h3>Click the button below to go to our homepage.</h3><br>";
	echo "<a href= homepage.php>Go To Homepage</a>";	
	
	mysqli_close($conn);
?>
</html>
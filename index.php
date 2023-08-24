<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Welcome</title>
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
	
	.active {
    font-size: 17px;
    color: green;
    }	

	body {
	background-image: url(images/booksbg.jpg);
	}
	
	p {
		font-size: 26px;	
		
	}
	
	a.button {
    
	background-color: white;
	color: black;
	border: 2px solid gold;
	border-radius: 4px;
	font-size: 24px;
	padding: 7px;
	font-family: 'Garamond',serif;
	text-decoration: none;
	}
	
</style>
	</head>
	
	<body style="text-align:center">
	<div class="container">
		<h2><i>ABC Bookstore</i></h2>
		<p><b>Choose User</b></p><br>
		<?php
			echo "<a href='userlogin-css.php' class='button'>Customer</a><br><br><br>";
			echo "<a href='adminlogin.php' class='button'>Admin</a><br><br><br>";
			echo "<a href='sellerlogin.php' class='button'>Seller</a>";
		?>

	</div>
	</body>
</html>
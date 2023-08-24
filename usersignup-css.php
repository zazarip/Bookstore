<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<title>Sign Up Details|Customer</title>
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

	body {
	background-image: url(images/booksbg.jpg);
	}
		
		</style>
	</head>
	
	<body style="text-align:center">
	<div class="container">
		<h2><i>ABC Bookstore</i></h2>
		<form action= "adduser-css.php" method= "post">
		Username: <input type= "text" placeholder= "Enter your username" name= "username" required><br><br>
		Email Address: <input type= "email" placeholder= "Enter your email address" name= "em" required><br><br>
		Password: <input type= "password" placeholder= "Enter your password" name= "password" required><br><br>
		Phone Number: <input type= "text" placeholder= "Enter your phone number" name= "phonenum" required><br><br>
		<input type= "submit" value= "Sign Up"><br>
		<form>
		</div>
	</body>
</html>
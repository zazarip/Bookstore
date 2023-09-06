<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Login Details|Customer</title>
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
		
		</style>
	</head>
<?php
session_start();

$message = "";

if (count($_POST) > 0) {
  include 'conn.php';

  $email = $_POST["Cust_email"];
  $password = $_POST["Cust_pass"];

  $result = mysqli_query($conn, "SELECT * FROM customer WHERE Cust_email='" . $email . "' and Cust_pass='" . $password . "'");
  
  if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      $_SESSION["Cust_username"] = $row['Cust_username'];
      header("Location: homepage-css.php");
      exit(); // Ensure that no further code is executed after redirection
    } else {
      $message = "Invalid Email or Password!";
    }
  } else {
    $message = "Error executing the SQL query: " . mysqli_error($conn);
  }
}

// Rest of your HTML code

?>
	<body style="text-align:center">
	<div class="container">
		<h2><i>ABC Bookstore</i></h2>
		<h3>CUSTOMER</h3><br>
		<form class="box" action="" method="post">
		<div class="message"><?php if($message != "") {echo $message;}?></div>
		Email: <input type= "text" placeholder= "Enter your email" name= "Cust_email" required="required">
		<br><br>
  
		Password: <input type= "password" placeholder= "Enter your password" name= "Cust_pass" required="required">
		<br><br>

		<input type= "submit" name= "login" value= "Login"><br><br>
		
		<p>Not a member?</p>
		<b><a class= "active" href= "usersignup-css.php">Sign Up</a></b>
		</form>
	</div>
	
	</body>
</html>

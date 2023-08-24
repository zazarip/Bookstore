<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Login Details| Admin</title>
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

$message="";
if(count($_POST)>0){
  include 'conn.php';

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE Adm_email='". $_POST["Adm_email"]. 
  " ' and Adm_pass= '". $_POST["Adm_pass"]."'");
  $row= mysqli_fetch_array($result);
  if(is_array($row)){
    $_SESSION["Adm_username"]= $row['Adm_username'];
    $_SESSION["Adm_name"]= $row['Adm_name'];
  }else{
    $message= "Invalid Email or Password!";
  }
  
}
if(isset($_SESSION["Adm_username"])){
  header("Location: viewcustprofile.php");
}


?>	
	<body style="text-align:center">
	<div class="container">
		<h2><i>ABC Bookstore</i></h2>
		<h3>ADMIN</h3><br>
		<form class="box" action="" method="post">
		<div class="message"><?php if($message != "") {echo $message;}?></div>
		Email: <input type= "text" name="Adm_email" placeholder= "Please enter your email" required="required"><br><br>
		
		Password: <input type= "password" name="Adm_pass" placeholder= "Enter your password" required="required"><br><br>
		
		<input type= "submit" value= "Login"><br><br>
		</form>
	</div>
	</body>
</html>
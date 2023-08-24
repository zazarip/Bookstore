<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
		<title>Card details</title>
	<style>

	*,
    *:before,
    *:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

img {
  border-radius: 50%;
}

body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}

h1{ text-align: center;
	 font-family: 'Garamond',serif;
	 font-size: 40px;}
fieldset{ margin:10px;}
p {text-align: center;}
fieldset{text-align: center;}

.container{
    background-color: LightSalmon;
    padding: 40px 60px;
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
    col
	</style>
	</head>


	<body>

	<div class="container">
		<form action= "display_receipt.php" name = "Card"  method= "post" >
		<h2><i>Card payment details</i></h2>
		Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type= "text" name= "name" required><br><br>
		Email Address: <input type= "email" name= "Cust_email" required><br><br>
		Username: &nbsp;&nbsp;&emsp;  <input type= "text" name= "Cust_username" required><br><br>
		Card details: &nbsp;&nbsp;&nbsp; <input type= "text" name= "Card_ID" required><br><br>
		<input type= "submit" value= "pay now"><br>
		</form>
		</div>
	</body>
</html>
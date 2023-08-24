<html> 
<head>
	<title> Form Feedback</title>
</head>
<style>
body {background-image:url(image/booksbg.jpg);
    background-color: lightYellow;}
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
    color: white;
    }	
</style>
<div>
	<ul class="navbar-nav">
		<li class="nav-item"><a href="homepage-css.php" ><b><u>Home</u></b></a></li>
		<li class="nav-item"><a href="profile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="purchase.php" ><b><u>My Purchases</u></b></a></li>
	</ul>
	</div>
<body style="text-align:center">
	<div class="container">
	<h1> Your Feedback </h1> 
<?php #Script handle form
		if (strlen($_POST["Cust_username"]) >0)
		{
			$_POST["Cust_username"]= $_POST["Cust_username"];
		}
		else
		{
			$_POST["Cust_Cust_username"]= null;
			
			echo '<p><b> You Forgot to Enter Your Name! </b></p>';
		}
		
		if (strlen($_POST["Book_code"]) >0)
		{
			$_POST["Book_code"] = $_POST["Book_code"];
		}
		else
		{
			$_POST["Book_code"]= null;
			
			echo '<p><b> Please enter book code!</b></p>';
		}
		
				if (strlen($_POST["book_title"]) >0)
		{
			$_POST["book_title"] = $_POST["book_title"];
		}
		else
		{
			$_POST["book_title"]= null;
			
			echo '<p><b> Please enter book title!</b></p>';
		}
				
		if (strlen($_POST["Book_feedback"]) >0)
		{
			$_POST["Book_feedback"] = $_POST["Book_feedback"];
		}
		else
		{
			$_POST["Book_feedback"]= null;
			
			echo '<p><b> Your Forgot to Enter Your book feedback!</b></p>';
		}
		
		if(!(strlen($_POST["Cust_email"]) >0))
		{
			$_POST["Cust_email"]=null;
			
			echo '<p><b> You Forgot to Enter Your Email!</b></p>';
		}
		
		if($_POST["Cust_username"] && $_POST["Book_feedback"] && $_POST["Cust_email"] && $_POST["Book_code"] && $_POST["book_title"])
		{
			echo "Thank You, " .$_POST["Cust_username"]. " for the following book feedback: <br /> 
			<tt>". $_POST["Book_feedback"]. " </tt> <p> We will reply to you at <i>" . $_POST["Cust_email"].
			"</i></p>";
		}
	?>
	<?php 
include 'conn.php';

$sql="insert into feedback (Cust_username,Book_code,book_title, Book_feedback) 
values ('$_POST[Cust_username]','$_POST[Book_code]','$_POST[book_title]', '$_POST[Book_feedback]')";
if(!mysqli_query($conn, $sql)){
	die('Error: '.mysqli_error($conn));
	
}

?>

</body>
</html>
<html lang="en">
<head>
<title>Give Feedback</title>
<head>
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
    top: 55%;
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
</head>
<div>
	<ul class="navbar-nav">
		<li class="nav-item"><a href="homepage-css.php" ><b><u>Home</u></b></a></li>
		<li class="nav-item"><a href="profile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="purchase.php" ><b><u>My Purchases</u></b></a></li>
	</ul>
	</div>
<body style="text-align:center">
	<div class="container">
	<h1> Give Feedback </h1> 
<form action="review.php" method="post">
<fieldset>
<p><b>Username: </b><input type="text" size="12" maxlength="12" name="Cust_username" placeholder="username"><p />
 <p><b>Email Address: </b><input type="text" size="12" maxlength="36" name="Cust_email" placeholder="email"><p />
 <p><b>Book Code: </b><input type="text" size="12" maxlength="36" name="Book_code" placeholder="bookcode"><p />
 <p><b>Book title: </b><input type="text" size="12" maxlength="36" name="book_title" placeholder="book title"><p />
 <p><b>Give Feedback: </b><textarea name="Book_feedback" rows="3" cols="50">comments</textarea></p>
</fieldset>
<tr>
<td><br><input type="submit" name="submit" value="Submit Information"> </td>
</tr>
</form>
</div>
</body>
</html>
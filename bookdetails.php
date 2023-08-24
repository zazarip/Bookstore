<!DOCTYPE html>
<html>
<title>Book Details</title>
<style>
body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}
.container{
    background-color: Khaki;
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
</style>
<body style="text-align:center">
<div class="container">
<?php 
include 'conn.php';
$bookcode = $_GET['bookcode'];
$result = mysqli_query($conn, "select * from books
where Book_code=$bookcode");
$row = mysqli_fetch_row($result);
	echo "<fieldset>";
	echo "<legend><h3> BOOK DETAILS </h3></legend>";
	echo "Book Code : $row[0]<br>";
	echo "Title : $row[2]<br>";
	echo "Author : $row[3]<br>";
	echo "Publisher : $row[4]<br>";
	echo "Publication Date : $row[5]<br><br>";
	echo "</fieldset>";
	echo "<br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<button onclick= "document.location= 'homepage-css.php'">Back to Explore Books</button>
</body>
</html>
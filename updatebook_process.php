
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title> Profile </title>
	</head>
<head>
<meta name="viewport" content="width=device-width">
<style>

img {
  border-radius: 50%;
}

body {
    background-color: lightYellow;
}

h1{ text-align: center;
	 font-family: 'Garamond',serif;
	 font-size: 40px;}
fieldset{ margin:10px;}
p {text-align: center;}
fieldset{text-align: center;}

.container{

    background-color: khaki;
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
</head>
	
	<h1>Your books has been succesfully update!</h1>
	<body style="text-align:center">
	<div class="container">

<?php
include 'conn.php';
$bookcode = $_GET['bookcode'];
$update = "UPDATE books SET Book_code='$_POST[Book_code]',
Book_price='$_POST[Book_price]',book_title='$_POST[book_title]',
book_author='$_POST[book_author]',book_publisher='$_POST[book_publisher]'
where Book_code=$bookcode";
if(!mysqli_query($conn, $update)){ die('Error: '.mysqli_error($conn)); }
$result = mysqli_query($conn, "select * from books where Book_code=$bookcode");
$row = mysqli_fetch_row($result);
echo "Book code : $row[0]<br>Book price : $row[1]<br>";
echo "Book title : $row[2]<br>Book author : $row[3]<br>";
echo "Book publisher : $row[4]<br>book category : $row[6]<br><br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
	<button onclick= "document.location= 'display_books.php'">Back to Update Books</button>
</body>
</html>

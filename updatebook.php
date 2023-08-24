
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
	
	<h1>Update books</h1>
	<body style="text-align:center">
	<div class="container">
	
<?php
include 'conn.php';
$bookcode = $_GET['bookcode'];
$result = mysqli_query($conn, "select * from books where Book_code=$bookcode");
$row = mysqli_fetch_row($result);
echo "<form action=updatebook_process.php?bookcode=$row[0] method=post>";
echo "Book code : <input type=text name=Book_code value='$row[0]' readonly><br>";
echo "Book price : <input type=text name=Book_price value='$row[1]'><br>";
echo "Book title : <input type=text name=book_title value='$row[2]'><br>";
echo "Book author : <input type=text name=book_author value='$row[3]'><br>";
echo "Book publisher: <input type=text name=book_publisher value='$row[4]'><br>";
echo "book category : <input type=text name=book_cat value='$row[6]'><br><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>
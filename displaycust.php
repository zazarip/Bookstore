<?php
include 'conn.php';

echo "<table border= '1'<tr><th>Username</th><th>Email</th>";
echo "<th>Phone Number</th><th>Action</th></tr>";

$result= mysqli_query($conn, "select * from customer where Cust_username= 'anyaforger12'");

while($row= mysqli_fetch_row($result)){

echo "<tr><td>$row[0]</td>"; //display first row-username
echo "<td>$row[2]</td>";	//display 2nd row-email
echo "<td>$row[3]</td>";	//display 3rd row-phone num

echo "<td><a href= updatecust.php?ui= $row[0]>Update</a>"; //dalam col action
echo "&nbsp;&nbsp;&nbsp;";
echo "<a href= delete.php?ui= $row[0]>Delete</a></td>";//dalam col action
echo "</tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);
?>
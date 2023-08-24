<?php
	define ('DB_SERVER','localhost');
	define ('DB_PASSWORD','');
	define ('DB_USERNAME','root');
	define ('DB_NAME','bookstore');
		
	$conn= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$result= mysqli_query($conn, "select * from customer");
	while ($row= mysqli_fetch_array($result)){
		foreach($row as $key=>$value){
			echo "$key= $value <br>\n";
		}
			echo "<br>";
		}
		
	mysqli_free_result($result);
	mysqli_close($conn);
		
?>
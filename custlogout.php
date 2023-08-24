<?php
session_start();
unset($_SESSION["Cust_id"]);
unset($_SESSION["Cust_username"]);
header("Location: index.php");
?>
<?php
session_start();
unset($_SESSION["Seller_ID"]);
unset($_SESSION["Seller_name"]);
header("Location: index.php");
?>
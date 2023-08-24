<?php
session_start();
unset($_SESSION["Adm_username"]);
unset($_SESSION["Adm_name"]);
header("Location: index.php");
?>
<?php
session_start();
$_SESSION["logueado"] = "false";
header("location: index.php");
?>
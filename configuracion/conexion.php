<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_hipermedial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
} 
//echo "Conexion exitosa";
echo "<h1 align='center'>MENSAJERIA</h1>" 
?>
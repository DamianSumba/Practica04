<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    session_start();
    include 'conexion.php';
if(!isset($_SESSION['logueado'])||$_SESSION['logueado'] != "true"){
	echo "<script>alert('No puede para Ingresar');</script>";
	header("Location: index.php");
}
    
    
    
    
    
    //$usuario =  $_POST["usuario"];

    //$cedula = $_GET['cedula'];
    $sql = "Select * from usuario";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //session_start();
            echo "<p align='right' float='left'> Administrador: ".$_SESSION['usuario']."</p>";
           
        
} else {
    echo "0 resultados";
        echo "<p align='center' ><a href=crear.php>crear</p>";
}

    //echo "<p>" . $cedula . "</p>";
?>
</body>
</html>
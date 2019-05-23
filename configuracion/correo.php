
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
    
    
$correo=''.$_SESSION['cor'];
    $sql = "Select * from correo where cor_remitente='$correo' or cor_destinatario='$correo'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //session_start();
            echo "<p align='right' float='left'> usuario: ".$_SESSION['usuario']."</p>";
            echo "<p align='right'><a href=cerrar.php> Cerrar Sesion </a></p>";
            
            echo "<table width='100%' border='3'><tr><td>codigo</td><td>fecha</td><td>remitente</td><td>destinatario</td><td>asunto</td><td>mensaje</td></tr>";
            // valor = "ll";
        // }
     while($row = $result->fetch_assoc()) {
         $id="".$row['cor_codigo'];
         ?>
         <tr>
            <td><?php echo $row['cor_codigo']; ?></td>
            <td><?php echo $row['cor_fecha']; ?></td>
            <td><?php echo $row['cor_remitente']; ?></td>
            <td><?php echo $row['cor_destinatario']; ?></td>
            <td><?php echo $row['cor_asunto']; ?></td>
            <td><?php echo $row['cor_mensaje']; ?></td>
           
            
    </tr>
    <?php
 }
 echo "</table>";
    
    
    echo "<p align='center' ><a href=nuevoCorreo.php>Nuevo Correo</a></p><br></br>";

        
} else {
    echo "0 resultados";
    echo "<p align='center' ><a href=nuevoCorreo.php>Nuevo Correo</a></p><br></br>";

}

?>
</body>
</html>
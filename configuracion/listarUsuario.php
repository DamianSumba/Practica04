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
    
    

    $sql = "Select * from usuario";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //session_start();
            echo "<p align='right' float='left'> Administrador: ".$_SESSION['usuario']."</p>";
            echo "<p align='right'><a href=cerrar.php> Cerrar Sesion </a></p>";
            
            echo "<table width='100%' border='3'><tr><td>codigo</td><td>nombre</td><td>correo</td><td>password</td><td>rol</td><td>foto</td><td>eliminar</td><td>modificar</td></tr>";
            // valor = "ll";
        // }
     while($row = $result->fetch_assoc()) {
         $id="".$row['usu_codigo'];
         ?>
         <tr>
            <td><?php echo $row['usu_codigo']; ?></td>
            <td><?php echo $row['usu_nombre']; ?></td>
            <td><?php echo $row['usu_correo']; ?></td>
            <td><?php echo $row['usu_password']; ?></td>
            <td><?php echo $row['usu_rol']; ?></td>
            <td><img height="40px" src='data:image/jpg;base64,<?php echo base64_encode($row['foto']);?>'/></td>            
            <?php
            echo "<td><input type='button' onclick= window.location='eliminar.php?id=$id' value='eliminar' id=".$id."></td><td><input type='button' onclick= window.location='modificar.php?id=$id' value='modificar' id=".$id.">";
            ?>
            
    </tr>
    <?php
 }
 echo "</table>";
       
    
    echo "<p align='center' ><a href=crear.php>crear</a></p><br></br>";
    echo "<p align='center' ><a href=listar.php>listar mensajes</a></p>";

        
} else {
    echo "0 resultados";
    echo "<p align='center' ><a href=crear.php>crear</a></p><br></br>";
    echo "<p align='center' ><a href=listar.php>listar mensajes</a></p>";
}

?>
</body>
</html>
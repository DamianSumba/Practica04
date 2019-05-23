<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <title>Crear</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    </head>
    <body>
        <?php
    include 'conexion.php';
        $id = $_GET['id'];
        $sql = "Select * from usuario where usu_codigo='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows >= 0) {
        session_start();
            while($row = $result->fetch_assoc()) {
                $id=''.$row['usu_codigo'];
                $nombre=''.$row['usu_nombre'];
                $correo=''.$row['usu_correo'];
                $password=''.$row['usu_password'];
                $rol=''.$row['usu_rol'];

                echo "<h1> FORMULARIO </h1>";
                echo "<form id='formulario' name='formulario' method='post' action='mod.php?id=$id' enctype='multipart/form-data'>";
                //echo "<form>";
                
                echo "<label> Nombre Completo: </label>";
                echo "<input type='text' name='nombre' id='nombre' value='$nombre'><br>";
                echo "<label> Correo: </label>";
                echo "<input type='text' name='correo' id='correo' value='$correo'><br>";
                echo "<label> password: </label>";
                echo "<input type='password' name='contra' id='contra' value='$password'><br>";
                echo "<label> rol: </label>";
                echo "<input type='text' name='rol' id='correo' value='$rol'><br>";
                echo "<label> Imagen: </label>";
                echo "<input type='file' name='imagen' id='imagen' value=''>(*)<br>";
                echo "<input type='submit' value='modificar'>";
                echo "</form>";
            }
            }

?>
  
    </body>
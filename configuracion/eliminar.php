<!DOCTYPE html> 
<html lang='es'> 
    <head>
        <title>Eliminar</title>
        <link rel='stylesheet' type='text/css' href='index.css' media='screen'>
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
                $nombre=''.$row['usu_nombre'];
                $correo=''.$row['usu_correo'];
                $password=''.$row['usu_password'];
                $rol=''.$row['usu_rol'];
                
                echo "<h1> FORMULARIO </h1>";
                echo "<form id='formulario' name='formulario' method='post' action='del.php?id=$id' enctype='multipart/form-data'>";
                //echo "<form>";
                
                echo "<label> Nombre Completo: </label>";
                echo "<input type='text' name='nombre' id='nombre' value='$nombre' disabled><br>";
                echo "<label> Correo: </label>";
                echo "<input type='text' name='correo' id='correo' value='$correo' disabled><br>";
                echo "<label> password: </label>";
                echo "<input type='password' name='contra' id='contra' value='$password' disabled><br>";
                echo "<label> rol: </label>";
                echo "<input type='text' name='rol' id='correo' value='$rol' disabled><br>";
                echo "<input type='submit' value='eliminar'>";
                echo "</form>";
            }
            }

?>
  
    </body>
</html>




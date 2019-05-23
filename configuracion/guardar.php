<?php
    include 'conexion.php';
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password= $_POST["contra"];
    $rol= $_POST["rol"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
        $sql2 = "Insert into usuario(usu_nombre, usu_correo, usu_password, usu_rol, foto) values ('$nombre', '$correo', '$password', '$rol', '$imagen')";
        if ($conn->query($sql2) === TRUE) {
          
            echo "<script type='text/javascript'>alert('Persona Registrada'); window.location.href='listar.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
?>
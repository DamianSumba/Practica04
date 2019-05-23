<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password= $_POST["contra"];
    $rol= $_POST["rol"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    

        $sql = "Update usuario set usu_nombre='$nombre', usu_correo='$correo', usu_password='$password', usu_rol='$rol', foto='$imagen' where usu_codigo='$id'";
        if ($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>alert('Persona Modificada'); window.location.href='listarUsuario.php';</script>";
        } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>
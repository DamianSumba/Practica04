<?php
    include 'conexion.php';
    $id = $_GET['id'];
    //echo "hhh".$id;
        $sql = "Delete from usuario where usu_codigo='$id'";

    
        echo "<script type='text/javascript'> var opcion = confirm('Esta seguro de eliminar esta Persona'); if(opcion==true){}</script>";
        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Persona Eliminada'); window.location.href='listar.php';</script>";
        } else {
           echo "<script type='text/javascript'> window.location.href='listar.php';</script>";
        }    
?>
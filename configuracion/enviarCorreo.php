<?php
    session_start();
    include 'conexion.php';
    $destinatario = $_POST["destinatario"];
    $asunto= $_POST["asunto"];
    $mensaje= $_POST["mensaje"];
    $fecha= $_POST["fecha"];

    

    $emisor=''.$_SESSION["cor"];
        $sql2 = "Insert into correo(cor_destinatario, cor_asunto, cor_mensaje, cor_fecha, cor_remitente) values ('$destinatario', '$asunto', '$mensaje', '$fecha', '$emisor')";
        if ($conn->query($sql2) === TRUE) {
          
            echo "<script type='text/javascript'>alert('Correo Enviado'); window.location.href='correo.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
?>
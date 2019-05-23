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
        $sql = "Select * from correo where cor_codigo='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows >= 0) {
        session_start();
            while($row = $result->fetch_assoc()) {
                $emisor=''.$row['cor_remitente'];
                $destinatario=''.$row['cor_destinatario'];
                $asunto=''.$row['cor_asunto'];
                $mensaje=''.$row['cor_mensaje'];
                $fecha=''.$row['cor_fecha'];
                echo "<h1> FORMULARIO </h1>";
                echo "<form id='formulario' name='formulario' method='post' action='delCorreo.php?id=$id' enctype='multipart/form-data'>";
                //echo "<form>";
                
                echo "<label> Destinatario: </label>";
                echo "<input type='text' name='destinatario' id='destinatario' value='$destinatario' disabled><br>";
                echo "<label> Emisor: </label>";
                echo "<input type='text' name='emisor' id='emisor' value='$emisor' disabled><br>";
                echo "<label> asunto: </label>";
                echo "<input type='text' name='asunto' id='asunto' value='$asunto' disabled><br>";
                echo "<label> mensaje : </label>";
                echo "<textarea rows='30' cols='200' name='mensaje' id='mensaje'>$mensaje</textarea><br>";
                echo "<label> fecha: </label>";
                echo "<input type='text' name='fecha' id='fecha' value='$fecha' disabled><br>";
                echo "<input type='submit' value='eliminar'>";
                echo "</form>";
            }
            }

?>
  
    </body>
</html>




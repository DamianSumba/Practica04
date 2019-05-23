<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <title>Nuevo Correo</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    </head>
    <body>
  
        
        <h1> Nuevo Correo </h1>
        <form id="formulario" name="formulario" method="post" action="enviarCorreo.php" enctype="multipart/form-data">
        <label> Fecha: </label>
        <input type="text" name="fecha" id="fecha" value="">(*)<br>
        <label> Destinatario: </label>
        <input type="text" name="destinatario" id="destinatario" value="">(*)<br>
        <label> Asunto: </label>
        <input type="text" name="asunto" id="asunto" value="">(*)<br>
        <label>Mensaje*</label><br>
            <textarea rows="30" cols="200" name="mensaje" id="mensaje"></textarea><br>
        <input type="submit" id="enviar" value="enviar" name="enviar">
        <input type="button" id="cancelar" value="Cancelar">
        
        <!--<input type="submit" id="modificar" value="modificar" name="modificar">-->
        </form>
            
          <?php
    session_start();
    include 'conexion.php';
if(!isset($_SESSION['logueado'])||$_SESSION['logueado'] != "true"){
	echo "<script>alert('No puede para Ingresar');</script>";
	header("Location: index.php");
}
        
        
        ?>
    </body>
</html>
<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <title>Crear</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    </head>
    <body>
  
        
        <h1> Crear Usuario </h1>
        <form id="formulario" name="formulario" method="post" action="guardar.php" enctype="multipart/form-data">
        <label> Nombre Completo: </label>
        <input type="text" name="nombre" id="nombre" value="">(*)<br>
        <label> Correo: </label>
        <input type="text" name="correo" id="correo" value="">(*)<br>
        <label> Contraseña: </label>
        <input type="password" name="contra" id="contra" value="">(*)<br>
        <label> Rol: </label>
        <input type="text" name="rol" id="rol" value="">(*)<br>
        <label> Imagen: </label>
        <input type="file" name="imagen" id="imagen" value="">(*)<br>
        <input type="submit" id="enviar" value="Crear" name="enviar">
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
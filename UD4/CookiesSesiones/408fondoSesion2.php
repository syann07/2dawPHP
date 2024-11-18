<?php
/* Debe mostrar el color y dar la posibilidad de: 
1) volver a la página anterior mediante un enlace 
2) y mediante otro enlace, vaciar la sesión y volver a la página anterior. */ 

session_start();
if(isset($_GET['reset'])){
    session_destroy();
    header("408fondoSesion1.php");   //lo mando a la otra pagina
}
$color = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : 'white';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion 2</title>
</head>
<body style="background-color: <?php echo $color?>">
    <p>El color de fondo actual es: <?php echo $color?></p>
    <a href ="408fondoSesion1.php">Volver a la página anterior</a>
    <a href="408fondoSesion2.php?reset=1">Vaciar la sesión y volver a la página anterior</a>    <!-- se llama a sí mismo con un valor determinado -->
</body>
</html>

<!-- Mediante el uso de cookies, crea una página con un desplegable con varios colores, de manera que el usuario pueda cambiar el color de fondo de la página 
(atributo bgcolor). Al cerrar la página, ésta debe recordar, al menos durante 24h, el color elegido y la próxima vez que se cargue la página, 
lo haga con el último color seleccionado. -->
<?php 
    $color = isset($_COOKIE['colorFondo']) ? $_COOKIE['colorFondo'] : 'white';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $color = $_POST['color'];
        setcookie("colorFondo",$color,time()+ 3600 * 24);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Fondo</title>
</head>
<body style="background-color: <?php echo $color?>">
    <form method="POST">
        <label for="color">Elige el color del fondo</label>
        <select id="color" name="color" required>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <button type="submit" name="Enviar">Enviar</button>
    </form>
</body>

</html>
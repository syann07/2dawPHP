<!-- Modifica el ejercicio anterior para almacenar el color de fondo en la sesión y no emplear cookies. Además, debe contener un 
enlace al siguiente archivo. -->
<?php
session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['colorFondo'] = $_POST['color'];
    }

    $color = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : 'white';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Fondo con sesion</title>
</head>
<body style="background-color: <?php echo $color?>">
    <form method="POST">
        <label for="color">Elige el color del fondo</label>
        <select id="color" name="color" required>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <button type="submit" name="Enviar">Guardar color</button>
    </form>
    <a href="408fondoSesion2.php">Siguiente</a>
</body>

</html>

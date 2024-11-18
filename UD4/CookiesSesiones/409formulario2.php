<?php

    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION ['nombre'] = $_POST["nombre"];
        $_SESSION ['email'] = $_POST["email"];
        $_SESSION ['url'] = $_POST["url"];
        $_SESSION ['sexo'] = $_POST["sexo"];
    }
    else {echo "acceso denegado";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario</h1>
    <form action="409formulario3.php" method="post">
        <label for="convivientes">Número de Convivientes en el Domicilio:</label>
        <input type="number" id="convivientes" name="convivientes" min="1" required>
        <br><br>

        <label>Aficiones:</label>           <!-- cuando se pueden obtener varios valores hay que añadir un array en el name -->
        <input type="checkbox" id="deporte" name="aficiones[]" value="Deporte">
        <label for="deporte">Deporte</label>
        <input type="checkbox" id="musica" name="aficiones[]" value="Música">
        <label for="musica">Música</label>
        <input type="checkbox" id="Arte" name="aficiones[]" value="Arte">
        <label for="lectura">Arte</label>
        <input type="checkbox" id="viajar" name="aficiones[]" value="Viajar">
        <label for="viajar">Cine</label>
        <br><br>

        <label for="menu">Menú Favorito:</label>
        <select id="menu" name="menu[]" multiple required>  <!--  con multiple se pueden seleccionar varios -->
            <option value="Italiano">Italiano</option>      <!--  con required por lo menos uno tienes que marcar -->
            <option value="Asiático">Asiático</option>
            <option value="Vegetariano">Vegetariano</option>
            <option value="Parrilla">Parrilla</option>
        </select>
        <br><br>
        <button type="submit" value="Enviar">Enviar</button>
    </form>

</body>
</html>

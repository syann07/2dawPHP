<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Datos</title>
</head>
<body>
    <h1>Resumen de los Datos</h1>

//php
    // echo '<table>';
    // echo '<tr><th>Campo</th><th>Valor</th></tr>';

    // echo '<tr><td>Nombre y Apellidos</td><td>' . $_GET['nombre'] . '</td></tr>';

    // echo '<tr><td>Email</td><td>' . $_GET['email'] . '</td></tr>';

    // echo '<tr><td>URL de Página Personal</td><td>' . $_GET['url'] . '</td></tr>';

    // echo '<tr><td>Sexo</td><td>' . $_GET['sexo'] . '</td></tr>';

    // echo '<tr><td>Número de Convivientes en el Domicilio</td><td>' . $_GET['convivientes'] . '</td></tr>';


    // echo '<tr><td>Aficiones</td><td>';
    // if (isset($_GET['aficiones']) && is_array($_GET['aficiones'])) {
    //     echo implode(', ', $_GET['aficiones']);
    // } else {
    //     echo 'No se seleccionaron aficiones';
    // }
    // echo '</td></tr>';


    // echo '<tr><td>Menú Favorito</td><td>';
    // if (isset($_GET['menu']) && is_array($_GET['menu'])) {
    //     echo implode(', ', $_GET['menu']);
    // } else {
    //     echo 'No se seleccionaron menús';
    // }
    // echo '</td></tr>';

    // echo '</table>';
//php

</body>
</html> -->

<?php

//Para comprobar si se ha mandado el formulario o no (si no puede dar error)
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $convivientes = $_POST["convivientes"];
    $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : [];   //si no existe se reinicializa el array para vaciarlo
    $menuFav = isset($_POST["menu"]) ? $_POST["menu"] : [];

    echo "<p>Nombre y Apellidos: </strong> $nombre </p>";
    echo "<p>Email: </strong> $email </p>";
    echo "<p>URL personal: </strong> $url</p>";
    echo "<p>Sexo: </strong> $sexo </p>";
    echo "<p>Convivientes: </strong> $convivientes </p>";
    echo "<p>Aficiones: </strong>" . implode(', ', $aficiones) . "</p>";
    echo "<p>Menu Favorito: </strong>" . implode(', ', $menuFav) . "</p>";
}
else {echo "acceso denegado";}

?>



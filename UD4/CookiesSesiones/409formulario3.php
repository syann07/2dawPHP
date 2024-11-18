<?php
    session_start();  //no se crea una, se coge la activa (si la destruyes si se crea una)
    $convivientes = $_POST["convivientes"];
    $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : [];   //si no existe se reinicializa el array para vaciarlo
    $menuFav = isset($_POST["menu"]) ? $_POST["menu"] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Crear la tabla mostrando los datos -->
      <ul>
      <li>Nombre: <?php  echo $_SESSION['nombre'];?></li>
      <li>Email: <?php  echo $_SESSION['email'];?></li>
      <li>URL: <?php  echo $_SESSION['url'];?></li>
      <li>Sexo: <?php  echo $_SESSION['sexo'];?></li>
      <li>Convivientes: <?php echo $convivientes;?></li>
      <li>Aficiones: <?php echo implode(', ', $aficiones);?></li>
      <li>Menu Favorito: <?php echo implode(', ', $menuFav); ?></li>
      </ul>
</body>
</html>
<?php
echo "<b>Ruta del archivo: </b>" . $_SERVER['PHP_SELF'] ."<br>";
echo "<b>Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'] ."<br>";
echo "<b>Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'] ."<br>";

echo "<br>";
echo '
<html>
    <body>
        <form enctype="multipart/form-data" action = "comprobante.php" method = "POST">
            <input type="file" name = "archivoEnviado">
            <input type="submit" name="btnSubir" value="Subir">
        </form>
    </body>
</html>
';

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $archivo = $_FILES["archivo"];
    $anchura = $_POST["anchura"];
    $altura = $_POST["altura"];

    // Comprobar si el archivo es una imagen válida
    $tiposAdmitidos = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($archivo["type"], $tiposAdmitidos)) {
        echo "<p style='color: red;'>Error: Solo se permiten archivos de imagen (JPEG, PNG, GIF).</p>";
    } else {
        // Mostrar información sobre el archivo
        echo "<h2>Información del Archivo:</h2>";
        echo "<p><strong>Nombre del Archivo:</strong> " . $archivo["name"] . "</p>";
        echo "<p><strong>Tipo de Archivo:</strong> " . $archivo["type"] . "</p>";
        echo "<p><strong>Tamaño del Archivo:</strong> " . $archivo["size"] . " bytes</p>";

        // Mostrar dimensiones
        echo "<h2>Dimensiones:</h2>";
        echo "<p><strong>Anchura:</strong> $anchura cm</p>";
        echo "<p><strong>Altura:</strong> $altura cm</p>";

        // Visualizar la imagen
        echo "<h2>Imagen:</h2>";
        echo "<img src='./descargas/${$archivo["name"]}' alt='Imagen' width='$anchura px' height='$altura px'>";
        
        // Mover el archivo a una carpeta de destino en el servidor
        move_uploaded_file($archivo["tmp_name"], $archivo["name"]);
    }

} else {
    // Si alguien intenta acceder a este script directamente sin enviar el formulario, redirigir o mostrar un mensaje de error.
    echo "Acceso no autorizado";
}
?>

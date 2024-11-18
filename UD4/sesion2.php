<?php

    session_start();
    $nombre = $_SESSION['nombre'];
    echo "Hola de nuevo $nombre ";

?>
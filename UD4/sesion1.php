<?php

    session_start();
    echo session_id();
    $_SESSION['nombre'] = "Sonia";
    $_SESSION['edad'] = 40;
    $_SESSION['email'] = "sonia.bermejoabellan@educa.madrid.orgh";

    $nombre = $_SESSION['nombre'];
    echo "Mi nombre es $nombre ";
    
?>
</br>
<a href="sesion2.php"> Y luego</a>
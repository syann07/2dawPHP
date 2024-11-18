<?php
/*  Mediante el uso de cookies, informa al usuario de si es su primera visita, o si no lo es, muestre su valor (valor de un contador). 
Además, debes permitir que el usuario reinicialice su contador de visitas. */

   if(isset($_COOKIE["visitas"])) {
        $visitas = $_COOKIE["visitas"] + 1; //recuperar cookie y actualizar
        echo "Has visitado el sitio $visitas veces.";
}else{
    $visitas = 1;
    echo "Bienvenido! Esta es tu primera visita!";
}

setcookie("visitas",$visitas,time()+3600);   //Crear cookie

if(isset($_GET['reiniciar'])){
    setcookie("visitas","",time()-3600);
    header("Location: 406contadorVisitas.php");   //Con header (Location) vuelve al inicio, se reinicia la página.
}

?>
<!-- se pasa valor a la url (continuación) -->
<a href="?reiniciar=1">Reiniciar contador de visitas</a>
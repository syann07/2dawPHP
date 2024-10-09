<?php

if(isset($_GET["cantidad"]) && !empty ($_GET["cantidad"])){
$cantidad=$_GET["cantidad"];

echo "<form action='237gestionarPersonas.php' method='get'>";

    for($i=0;$i<$cantidad;$i++){

        echo "<p>";
        echo "<label for='nombre$i'>Nombre: </label>";
        echo "<input type='text' name='personas[$i][nombre]' id='nombre'>";
        echo "</p>";

        echo "<p>";
        echo "<label for='altura$i'>Altura: </label>";
        echo "<input type='number' name='personas[$i][altura]' id='altura'>";
        echo "</p>";

        echo "<p>";
        echo "<label for='email$i'>Email: </label>";
        echo "<input type='email' name='personas[$i][email]' id='email'>";
        echo "</p>";
    }
    
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";


}else{
    echo "Los datos no son correctos o están vacíos";
}



?>
<?php

$cantidad=$_GET["cantidad"];

echo "<form action='224sumarDatos.php' method='get'>";

for($i=0;$i<$cantidad;$i++){
    printf("<p><input type=number name=caja%d></p>", $i);
}

//Campo oculto para pasar la cantidad
printf("<input type=hidden name=cantidad value=%d>", $i);


echo "<input type='submit' value='Enviar'>";
echo "</form>";


?>
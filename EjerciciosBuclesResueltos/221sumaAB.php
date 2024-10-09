<?php
    $suma = 0;
    $inicio = $_GET['inicio'];
    $fin = $_GET['fin'];
    for( $i=$inicio;$i<=$fin;$i++)
        $suma+=$i;

    echo "La suma es $suma";

?>
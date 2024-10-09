<?php
    $inicio=$_GET["inicio"];
    $final=$_GET["final"];
    $suma=0;
    for($i=$inicio;$i<=$final;$i++){
        $suma+=$i;
    }
    echo $suma;
?>
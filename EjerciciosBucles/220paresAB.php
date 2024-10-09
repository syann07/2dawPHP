<?php

    $inicio=$_GET["inicio"];
    $final=$_GET["final"];

    //para comprobar si es impar que empiece por el siguiente par.
    if($inicio%2 != 0){
        $inicio++
    }
        
    echo "<ul>";
        for($i=$inicio;$i<=$final;$i+=2){
                echo "<li>$i</li>";
        }
    echo "</ul>";

?>
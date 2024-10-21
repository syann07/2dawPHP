<?php
    $frase = "Esta es mi frase.";
    $nueva ="";
    for ($i = 1; $i < strlen($frase); $i += 2) {
        $nueva = $nueva . $frase[$i];   //$nueva .= $frase[i]
    }

    //echo $nueva;
    printf(str_replace(" ","",$nueva));

?>
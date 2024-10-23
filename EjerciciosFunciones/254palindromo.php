<?php

function palindromo($frase): bool{
    $frase = strtolower($frase);
    $nueva = str_replace (" ","",$frase);
    $inversa = strrev($nueva);

    return $nueva == $inversa;
}

?>
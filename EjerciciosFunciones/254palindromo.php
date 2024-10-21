<?php

function palindromo($frase): boolean{
    $nueva = str_replace (" ","",$frase);
    $inversa = reverse($nueva);

    if($nueva == $inversa){
        return true;
    }else{
        return false;
    }
}


?>
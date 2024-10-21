<?php

$frase = "Esta es mi frase.";

function cani ($frase): string{

    $flagMay=true;

    for( $i= 0; $i<strlen($frase); $i++ ){

        if($frase[i] != " "){
            if($flagMay){
                $frase[$i] = strtoupper($frase[$i]);
                $flagMay = false;
            }else{
                $frase[$i] = strtolower($frase[$i]);
                $flagMay = true;
            }
        }
    }
    return $frase;
}
    
    
?>
<?php

    $frase = "Esta es mi frase.";
    $vocales=["a"=> 0, "e"=>0,"i"=> 0, "o"=>0, "u"=>0];
    $suma=0;
    for($i=0;$i<strlen($frase);$i++){
        foreach($vocales as $clave=>$valor){
            if(strtolower($frase[$i]) == $clave ){
                $vocales[$clave]++;
                $suma++;
            }
        }
    }
    print_r($vocales);
    echo $suma;
?>
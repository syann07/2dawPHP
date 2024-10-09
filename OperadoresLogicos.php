<?php 
//OPERADORES LOGICOS

    $a=21;
    $b='21';

    echo 'Resultado 1: '; 
    echo $a == $b;  //true porque tiene el mismo contenido
    echo 'Resultado 2: ';
    echo $a === $b;  //false porque no son del mismo tipo

    echo 'Resultado 1: '; 
    echo $a != $b;  //false, el contenido no es distinto
    echo 'Resultado 2: ';
    echo $a !== $b;  //true siempre que o bien el contenido o bien el tipo sea distinto
    
    $a=21;
    $b='22';
    echo $a <= $b; //True 


//OPERADOR TERNARIO

    $usuario = 'Luis';

    $resultado = $usuario != ''? 'Invitado': $usuario;
    echo $resultado;
    
?>
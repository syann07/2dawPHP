<?php
//Crea una función que permite generar una letra aleatoria, mayúscula o minúscula. 
function generador():string{
    return random_int(0,1) == 0?chr(random_int(65,90)) : chr (random_int(97,122));
}



?>
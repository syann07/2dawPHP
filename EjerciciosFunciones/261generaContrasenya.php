<?php
// Crea una función que a partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.
include_once ("260generador.php");
function generarPassword(int $tamanio):string{
    $password="";

    for($i=0;$i<$tamanio;$i++){
        $password.= random_int(0,1)? generador():random_int(0,9);
    }
    return $password;
}

?>
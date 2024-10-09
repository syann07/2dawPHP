<?php
//Ejercicio 7
/*Escribe un programa que, dados dos números, uno real (base) y un entero positivo 
(exponente), saque por pantalla el resultado de la potencia. No se puede utilizar el 
operador de potencia. */ 

$base = &_GET['base'];
$exponente = $_GET['exponente'];
$res=1;

while($exponente>0){
    
        $res*=$base;
        $exponente--;
}
echo $res;
/*
for($i=$exp; $i>0;$i--){
    $res*=$base;
}
*/
?>
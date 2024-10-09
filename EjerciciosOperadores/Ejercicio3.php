<?php
//Ejercicio 3
/*Dado un número de dos cifras, diseñe un algoritmo que permita obtener el número 
invertido. Ejemplo, si se introduce 23 que muestre 32.*/

$num=23;
$resto=23%10; //sacas el resto (3) para luego multiplicarlo por 10 (30)
$num2 = intdiv($num,10);  //floor($num/10);    //sacas el cociente (2)
echo $resto * 10 + $num2;

?>
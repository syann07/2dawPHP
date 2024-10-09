<?php
//Ejercicio 4
/*Diseñar un algoritmo que nos diga el dinero que tenemos (en euros y céntimos) después 
de pedirnos cuantas monedas tenemos (de 2€, 1€, 50 céntimos, 20 céntimos o 10 
céntimos). */

$moneda2 = 3;
$moneda1 = 2;
$moneda50 = 4;
$moneda20 = 5;
$moneda10 = 20;

$centimosTotal = ($moneda2*200) + ($moneda1 * 100) + 
    ($moneda50*50) + ($moneda20*20) + ($moneda10*10);
$euros = intdiv($centimosTotal,100);
$centimos = $centimosTotal%100;
$dineroTotal = 'En total tienes ' . $euros . ' euros y ' . $centimos . ' centimos.';
echo $dineroTotal;

?>
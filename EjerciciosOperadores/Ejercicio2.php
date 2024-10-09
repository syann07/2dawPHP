<?php
//Ejercicio 2 
/*Realiza un programa que reciba una cantidad de minutos y muestre por pantalla
a cuantas horas y minutos corresponde.  
Por ejemplo: 1000 minutos son 16 horas y 40 minutos. */

$min = 252;
$horas = intdiv($min,60);  //intdiv() devuelve la division entera.
$minutos = $min % 60;
echo $min . ' minutos son '. $horas . ' horas  y '. $minutos . ' minutos.';
  

/*
    CORRECCIÓN
    $tm = 1000;
    %tm = $m%60; (40)
    %th = $m/60 - $tm/100; (16)
*/
?>
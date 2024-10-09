<?php
//Ejercicio 5
/* Realiza un algoritmo que calcule la potencia, para ello pide por teclado la base y el 
exponente. Pueden ocurrir tres cosas:  
• El exponente sea positivo, sólo tienes que imprimir la potencia.  
• El exponente sea 0, el resultado es 1.  
• El exponente sea negativo, el resultado es 1/potencia con el exponente 
positivo. */ 

//isset() comprueba si existen esos datos
//empty() comprueba si está vacío
if(isset($_GET["base"]) && isset($_GET["exponente"]) && !empty($_GET["base"]) && !empty($_GET["exponente"])){
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];

    if($exponente>0 || $exponente<0){
        echo $base**$exponente;
    }else if($exponente == 0){
        echo 1;
    }
}
else{
    echo 'No existen datos';
}




?>
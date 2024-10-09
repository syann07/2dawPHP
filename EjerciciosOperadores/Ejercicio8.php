<?php
//Ejercicio 8
/*Programa que lea 3 datos de entrada A, B y C. Estos corresponden a las 
dimensiones de los lados de un triángulo. El programa debe determinar que tipo de 
triangulo es
*/ 
    //En la URL poner ? a=21 & b=21 & c=29
    $ladoA = $_GET['a'];
    $ladoB = $_GET['b'];
    $ladoC = $_GET['c'];

    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){

        if($ladoA==$ladoB && $ladoA==$ladoC){
            echo 'El triángulo es EQUILÁTERO';
        }
        else if($ladoA==$ladoB || $ladoB==$ladoC || $ladoA==$ladoC){
            echo 'El triángulo es ISÓSCELES';
        }
        else if(($ladoA ** 2 + $ladoB ** 2)== $ladoC ** 2 || //Pitágoras: a2 + b2 = c2
                ($ladoB ** 2 + $ladoC ** 2)== $ladoA ** 2 ||
                ($ladoA ** 2 + $ladoC ** 2)== $ladoB ** 2){   
            echo 'El triángulo es RECTÁNGULO';
        }
        else{
            echo 'El triángulo es ESCALENO';
        }
    }
    else{
        echo 'No existen datos para calcular.';
    }
   
?>
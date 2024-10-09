<?php
//Ejercicio 6
/*Algoritmo que pida dos números ‘nota’ y ‘edad’ y un carácter ‘sexo’ y muestre el mensaje 
‘ACEPTADA’ si la nota es mayor o igual a cinco, la edad es mayor o igual a dieciocho y el 
sexo es ‘F’. En caso de que se cumpla lo mismo, pero el sexo sea ‘M’, debe imprimir 
‘POSIBLE’. Si no se cumplen dichas condiciones se debe mostrar ‘NO ACEPTADA’.  */

//Si en vez de GET usamos POST funciona igual solo que oculta los datos en la URL
$nota= $_GET['nota'];
$edad = $_GET['edad'];
$sexo = $_GET['sexo'];

if($nota>=5 && $edad>=18 && $sexo =='F'){
    echo 'ACEPTADA';
}
else if($nota>=5 && $edad>=18 && $sexo =='M'){
    echo 'POSIBLE';
}
else{
    echo 'NO ACEPTADA';
}

?>
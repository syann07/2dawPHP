<?php

declare(strict_types=1);
include_once("243biblioteca.php");

//$arrFunciones = ["sumar","restar","multiplicar","dividir"];

if(isset($_GET["num1"])&&isset($_GET["num2"])){

    
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $funcion=$_GET["operacion"];
    
//     foreach($arrFunciones as $valor){         Funciones variables 
//         $funcion=$valor;
//         echo $funcion($num1,$num2)."<br>";
//  }
    echo "Resultado: ". $funcion($num1,$num2);
}



?>
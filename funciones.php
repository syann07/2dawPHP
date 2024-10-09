<?php
declare(strict_types = 1);
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
              //ya no funciona como $a sino como la variable
// function suma(&$a,$b){            //con el simbolo & se pasa el valor por referencia (por lo que la variable si varía)
//     $a = 3;                        //Si no se pasa por referencia el cambio no afecta a la variable (pero sí a la suma) (se hace una copia) 
//     $b = 4;
//     return $a + $b;
// }

// $arrnombres=array("Ivan","Maria","Pepe","Carlos","Samu");
// $arrnombres2=&$arrnombres;  //no se copia el array, por referencia cambia
// $arrnombres2[0]="Lucia";
// echo "Nombre array 0: ". $arrnombres[0] . "<br>";

// $resultado = suma($valor1, $valor2);
// echo $resultado . "<br>";
// echo "Valor 1: " . $valor1 . "<br>";
// echo "Valor 2: " . $valor2 . "<br>";


function suma(...$numeros){              //los 3 puntos (variadics) combierten los parametros en un array
    //$arrArgEntrada= func_get_args();   //este metodo recoge los parametros y los mete en un array
    $res = 0;
    foreach(/*$arrArgEntrada*/ $numeros as $valor){
        $res += $valor;
    }
    return $res;
}
echo suma(9,5,7);
                                  //valores por defecto
function  funcionArgumentosNombre($a, $b=2, $c=4){
    echo "$a $b $c";
}
funcionArgumentosNombre (c:3, a:1);   //devuelve 1 2 3 
?>
<?php
// declare(strict_types=1);

function esPar(int $num): bool {
     return $num%2==0;
}

// echo esPar(22)?"Es par":"Es inpar";


function arrayAleatorio(int $tam, int $min, int $max) : array{
        $arrnumeros=array();
        for($i=0;$i<$tam;$i++){
            $arrnumeros[$i]=rand($min,$max);
        }
        return $arrnumeros;
}

function mostrarArray(array $arr){
    foreach($arr as $valor){
        echo $valor ." ";
    }
}

//mostrarArray(arrayAleatorio(3,20,40));


function arrayPares(array &$array): int {

    $contpares=0;

    foreach($array as $valor){
       if(esPar($valor)) {
        $contpares++;
       }
    }

    return $contpares;
}

$arrResultado = arrayAleatorio(15,10,100);
mostrarArray($arrResultado);
echo "<br>";
echo arrayPares($arrResultado);

?>
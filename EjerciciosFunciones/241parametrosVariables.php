<?php

function mayor(): int{
    $mayor=0;
    if(count(func_get_args())==0){
        return false;
    }else{
        
        $array=func_get_args();
        $mayor=$array[0];
        foreach($array as $valor){
            if($valor>$mayor){
                $mayor=$valor;
            }
        }
        return $mayor;
    }
    
}

$res=mayor(-1,-45,-34,34);
echo $res;


function concatenar(...$palabras) : string{
    $palabrasconcatenadas="";
    foreach($palabras as $palabra){
       $palabrasconcatenadas = $palabrasconcatenadas. " " . $palabra;
    }
    return $palabrasconcatenadas;
}

echo concatenar("pala","libro","movil");


?>
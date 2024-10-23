<?php
declare(strict_types = 1);
const MIN_MAY= 65;
const MAX_MAY= 90;
const MIN_MIN= 97;
const MAX_MIN= 122;

function codificar($frase, int $desplazamiento): string{
    $resultado = "";
    
    //comprobamos desplazamiento
    if($desplazamiento >= 0){
        //recorremos frase
        for($i = 0; $i < strlen($frase); $i++){

            //comprobamos si el codigo asci corresponde a minuscula
            if(ord($frase[$i]) >= MIN_MIN && ord($frase[$i]) <= MAX_MIN){

                //si se pasa de 122 hay que calcular el desplazamiento
                if((ord($frase[$i])+$desplazamiento) > MAX_MIN){
                    $resultado .= chr($desplazamiento - (MAX_MIN - ord($frase[$i])) + MIN_MIN - 1);
                }else {
                    $resultado .= chr (ord($frase[$i])+$desplazamiento);
                }
            }

            //comprobamos si el codigo asci corresponde a mayuscula
            else if(ord($frase[$i]) >= MIN_MAY && ord($frase[$i]) <= MAX_MAY){
                
                //si se pasa de 90 hay que calcular el desplazamiento
                if((ord($frase[$i])+$desplazamiento) > MAX_MAY){
                    $resultado .= chr($desplazamiento - (MAX_MAY - ord($frase[$i])) + (MIN_MAY-1));
                }else {
                    $resultado .= chr (ord($frase[$i])+$desplazamiento);
                }     
            }
            //si no es letra lo dejamos tal cual
            else{
                $resultado .= $frase[$i];
            }
        }//fin del for
    }
    else{
        $resultado = "El desplazamiento debe ser positivo";
    }

    return $resultado;
}

$frase = "abcy";
$desplazamiento = 3;
$resultado = codificar($frase, $desplazamiento);
echo $resultado;
?>
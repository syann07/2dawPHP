<?php
$num=$_GET["num"];

function digitos(int $num): int{
    $cont= 0;
    do{
        $cont++;
        $num = intdiv($num,10);
    }while($num!=0);
    return $cont;
}

function digitoN(int $num, int $pos): int{
    $digitosPos = "No existe la posición";
    for($u=digitos($num);$I>=$pos;$i--){
        $digitosPos=$num%10;
        $num = intdiv($num1,10);
    }
    return $digitosPos;

    /*
    $longitud = digitos($num);

    if($pos > $longitud || $pos <=0) throw new Error("La posición no existe");

    for($i=0;$i<$longitud - $pos;$i++){          //Para quitar los digitos que quedan a la derecha
     $num/=10;
    }

    //Para obtener el resto (quitar las unidades)
    return  $num%10;
    
    */ 
}

function quitaPorDetras(int $num, int $cant): int{
    for($i=0;$i<$cant;$i++){   
        $num/=10;
    }  
    //intdiv($num,$cant);
    return $num;
}


function quitaPorDelante(int $num, int $cant): int{

    for($i=0;$i<$cant;$i++){
        $primerDigito = digitoN($num,1);
        $num -= $primerDigito * 10**(digitos($num)-1);   //Le va restando por unidades (20000-5000-400...)
    }
    return $num;
}

echo quitaPorDelante(12345,3);

?>
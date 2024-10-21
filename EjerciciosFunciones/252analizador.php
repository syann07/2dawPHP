<?php
    $frase = "Esta es mi frase.";
    $sumaletras=0;
    $sumapalabras=0;
    $palabra = "";

    for($i=0;$i<strlen($frase);$i++){
        if($frase[$i]!=" " && $frase[$i]!="." ){
            $palabra += $frase[$i];
            $sumaletras++;
        }else{
            $sumapalabras++;
            echo $palabra . " tiene " . strlen($palabra) . " letras.";
        }
    }
    
    echo "<p>Total de letras: ".$sumaletras."</p>";
    echo "<p>Total de palabras: ".$sumapalabras."</p>";

    /*function analizador ($frase):void{
        $arrFrase= explode(" ", $frase);      El explode convierte en un array un string en base a un separador
        $suma = 0;

        foreach($arrFrase as $value){
            echo $value . " tiene " . srtlen($value) . " letras." ;
            $acumulador += srtlen($value);
        }

        echo "Cantidad de palabras: " . count($arrFrase);
        echo "Cantidad de letras: " . $suma;
    }*/
?>
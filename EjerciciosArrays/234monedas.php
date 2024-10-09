<?php

$arrmonedas=["500"=>0,"200"=>0, "100"=>0, "50"=>0, "20"=>0, "10"=>0, "5"=>0, "2"=>0, "1"=>0];
$dinero=1525;


echo "<ul>";
    foreach($arrmonedas as $clave =>$valor){
        while($dinero >= $clave){
            $arrmonedas[$clave]++;
            $dinero-=$clave;
            //$valor++;
            //$dinero -= $clave;
        }
        
    };

    foreach($arrmonedas as $clave =>$valor){
        if($valor!=0){
            echo "<li>Tenemos  $valor  monedas de $clave</li>"; 
        }
    };

echo "</ul>";

?>
<?php

$lista=array();
$nummayor=0;
//$nummenor=PHP_INT_MAX;
$media=0;

for($i=0;$i<33;$i++){
    $lista[$i]=$num=rand(0,100);
}
$nummenor=$lista[0];

echo "<ul>";
foreach($lista as $numero){
    echo "<li>$numero</li>";
}
echo "</ul>";

for($i=0;$i<count($lista);$i++){
    
    //para calcular el mayor
    if($lista[$i]>$nummayor){
        $nummayor=$lista[$i];
    }
    //para calcular el menor
    elseif($lista[$i]<$nummenor){
        $nummenor=$lista[$i];
    }
    /*do{
        $nummenor=$lista[$i];
    }
    while($lista[$i]<$nummenor);*/
}
echo "<p>El numero mayor es $nummayor</p>";
echo "<p>El numero menor es $nummenor</p>";

//para calcular la media
foreach($lista as $numeros){
    $media+=$numeros;
}
$res = floor($media/count($lista));
echo "<p>la media es $res</p>";

?>
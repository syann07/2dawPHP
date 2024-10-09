<?php
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $res=1;
    $expAbs= abs($exponente);

    while($expAbs>0){
    
        $res*=$base;
        $expAbs--;
    }   
    if($exponente<0){
        echo 1/$res;
    }
    else{
        echo $res;
    }
?>
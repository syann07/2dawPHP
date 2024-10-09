<?php
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $res=1;
    for($i=$exponente; $i>0;$i--){
        $res*=$base;
    }
    echo $res;
?>
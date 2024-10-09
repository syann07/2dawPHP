<?php
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $res=1;
    
    if(){
        do{
            $res*=$base;
            $exponente--;
        }
        while($exponente>0);

        if($exponente<0){
            echo 1/$res;
        }  else{
            echo $res;
        } 
        
    }

    
?>
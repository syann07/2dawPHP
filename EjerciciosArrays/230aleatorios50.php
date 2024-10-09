<?php

$lista=array();

for($i=0;$i<50;$i++){
    $lista[$i]=$num=rand(0,99);
}

echo "<ul>";
    foreach($lista as $numero){
        echo "<li>$numero</li>";
    }
echo "</ul>";
?>
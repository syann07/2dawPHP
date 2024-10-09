<?php

$cant=$_GET["cantidad"];
$res=0;
for($i=0;$i<$cant;$i++){
    $res+=$_GET["caja$i"];
}
echo $res;

?>
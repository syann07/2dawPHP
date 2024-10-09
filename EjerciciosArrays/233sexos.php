<?php
$lista=array();
$SEXOS=["M", "F"];
$numsexos=["M"=>0, "F"=>0];

for($i=0;$i<100;$i++){
    $lista[]=$SEXOS[rand(0,1)];
}

for($i=0;$i<count($lista);$i++){
    if($lista[$i]==='M'){
        $numsexos["M"]++;
    }
    if($lista[$i]==='F'){
        $numsexos["F"]++;
    }
}

echo "Mujeres: ". $numsexos["M"];
echo "<p></p>";
echo "Hombres: ".$numsexos["F"];
?>

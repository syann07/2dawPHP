<?php


$per1=['nombre'=>'Mario', 'altura'=>170, 'email'=>'mario@correo.com'];
$per2=['nombre'=>'Alonso', 'altura'=>180, 'email'=>'alonso@correo.com'];
$per3=['nombre'=>'Dani', 'altura'=>175, 'email'=>'dani@correo.com'];
$per4=['nombre'=>'Carlos', 'altura'=>190, 'email'=>'carlos@correo.com'];
$per5=['nombre'=>'Pablo', 'altura'=>168, 'email'=>'pablo@correo.com'];


$personas=[$per1, $per2, $per3, $per4, $per5];

echo "<table style= 'border: solid 1px';>";
    foreach($personas as $per){
        echo "<tr>";
        foreach($per as $datos){
            echo "<td style= 'border: solid 1px';>$datos</td>";
        }
        
        echo "</tr>";
    }

echo "</table>";

?>
<style>

    table,td{
        border: solid 1px;
    }
</style>

<?php

$personas=["Mario"=>170, "Alonso"=>180, "Dani"=>175, "Carlos"=>190, "Pablo"=>168];
$media = 0;

echo "<table >";

        foreach($personas as $nombre => $altura){
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$altura</td>";
            echo "</tr>";
            $media+=$altura;
        }

        $res= intdiv($media,count($personas));
        echo "<tr>";
        echo "<td colspan='2' style='background-color: #b3f4fc;'>Media de altura: ". $res. "cm. </td>";
        echo "</tr>";

echo "</table>";
?>
<?php
    include_once("244euros.php");

    echo "<table style='border: solid 1px'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th style='border: solid 1px'>Producto</th>";
    echo "<th style='border: solid 1px'>Precio euros</th>";
    echo "<th style='border: solid 1px'>Precio pesetas</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    
    for($i=0;true;$i++){
        
        if(!isset($_GET["producto$i"])){
            break;
        }
        echo "<tr>";
        echo "<td>".$_GET["producto$i"]."</td>";
        echo "<td>".$_GET["precio$i"]."</td>";
        echo "<td style='border: solid 1px;'>". euros2pesetas($_GET["precio$i"])."</td>";
        echo "</tr>";
        
    }

   
    echo "</tbody>";
    echo "</table>";
    echo "<hr>";

?>
<?php
    if(isset($_GET['filas']) & isset($_GET['columnas']) & !empty($_GET['filas']) & !empty($_GET['columnas']) ){
        $filas = $_GET['filas'];
        $columnas = $_GET['columnas'];
        echo "<table style='border: 1px solid #000;'>";
                for($j=0;$j<$filas;$j++){
                echo "<tr >";
                    for ($i=0;$i<$columnas;$i++){
                    echo "<td style='border: 1px solid #000;'>($j,$i)</td>";
                    }
                echo "</tr>";
                }
              echo "</table>";
    }
    

?>
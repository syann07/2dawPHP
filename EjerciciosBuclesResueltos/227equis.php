<?php
    if(isset($_GET['filas']) & isset($_GET['columnas']) & !empty($_GET['filas']) & !empty($_GET['columnas']) ){
        $filas = $_GET['filas'];
        $columnas = $_GET['columnas'];
        echo "<table style='border: 1px solid #000;'>";
                for($j=0;$j<$filas;$j++){
                echo "<tr >";
                    for ($i=0;$i<$columnas;$i++){
                        if(($j==$i) || ($i+$j == $filas-1))
                            echo "<td style='border: 1px solid #000;'>($j,$i)</td>";
                        else
                            echo "<td style='border: 1px solid #000;'></td>";
                    }
                echo "</tr>";
                }
              echo "</table>";
    }
    

?>
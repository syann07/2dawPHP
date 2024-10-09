<?php
    if(isset($_GET['filas']) & isset($_GET['columnas']) & !empty($_GET['filas']) & !empty($_GET['columnas']) ){
        $filas = $_GET['filas'];
        $columnas = $_GET['columnas'];
        echo "<table style='border: 1px solid #000;'>";
                for($j=0;$j<$filas;$j++){    //creacion de filas
                echo "<tr >";
                    for ($i=0;$i<$columnas;$i++){       //creacion de columnas
                        if($j==0 || $j==$filas-1 || $i == 0 || $i == $columnas-1) 
                            echo "<td style='border: 1px solid #000;'>($j,$i)</td>";
                        else
                            echo "<td style='border: 1px solid #000;'></td>";
                    }
                echo "</tr>";
                }
              echo "</table>";
    }
    
?>

<!-- <table>
   <?php  for($i=0;$i<$filas;$I++){?>  //se usan corchetes en caso de quere usar etiquetas html dentro
    <tr>
        <?php for($j=0;$j<$columnas;&j++){?>
            <td>(<?=$i,$j?>)</td>
        <?php }?>
    </tr>
    <?php }?>
</table> -->
  

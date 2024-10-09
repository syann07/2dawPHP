<?php

if(isset($_GET["cantidad"]) && !empty ($_GET["cantidad"])){
    $cantidad=$_GET["cantidad"];
    
    echo "<form action='245imprimeTiquetCompra.php' method='get'>";
    
        for($i=1;$i<=$cantidad;$i++){
    
            echo "<p>";
            echo "<label for='producto'>Producto $i: </label>";
            echo "<input type='text' name='producto$i' id='producto$i'>";
            
            echo "<label for='precio'>Precio: </label>";
            echo "<input type='number' name='precio$i' id='precio$i'>";
            echo "</p>";
            
        }
        
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
    
    }else{
        echo "Los datos no son correctos o están vacíos";
    }

?>
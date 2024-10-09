<?php

if(isset($_GET["personas"]) && !empty ($_GET["personas"])){

        $personas=$_GET["personas"];
        $alta= null;
        $baja= null;

        foreach($personas as $persona){
            if($alta == null || $persona["altura"] > $alta['altura']){
                $alta=$persona;
            }

            if($baja == null || $persona["altura"] < $baja['altura']){
                $baja=$persona;
            }
         }

    

    echo "<table style='border: solid 1px'>";
    echo "<thead>";
    echo "<tr>";
    echo "<td style='border: solid 1px'>Nombre</td>";
    echo "<td style='border: solid 1px'>Altura</td>";
    echo "<td style='border: solid 1px'>Email</td>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
        foreach($personas as $persona){
            echo "<tr>";

            if($persona['altura']==$alta['altura']){

                echo "<td style='border: solid 1px; background-color: yellow;'>". $persona['nombre'] ."</td>";
                echo "<td style='border: solid 1px; background-color: yellow;'>". $persona['altura'] ."</td>";
                echo "<td style='border: solid 1px; background-color: yellow;'>". $persona['email'] ."</td>";
            }

            elseif($persona['altura']==$baja['altura']){

                echo "<td style='border: solid 1px; background-color: pink;'>". $persona['nombre'] ."</td>";
                echo "<td style='border: solid 1px; background-color: pink;'>". $persona['altura'] ."</td>";
                echo "<td style='border: solid 1px; background-color: pink;'>". $persona['email'] ."</td>";
            }
            
            else{
                echo "<td style='border: solid 1px;'>". $persona['nombre'] ."</td>";
                echo "<td style='border: solid 1px;'>". $persona['altura'] ."</td>";
                echo "<td style='border: solid 1px;'>". $persona['email'] ."</td>";
            }
           
            echo "</tr>";
        }

    echo "</tbody>";
    echo "</table>";
    echo "<hr>";
    echo "<p style='background-color: yellow;'> La persona más alta mide ".$alta['altura'] . " cm.</p>";
    echo "<p style='background-color: pink;'> La persona más baja mide ".$baja['altura'] . " cm.</p>";

}else{
    echo "Los datos no son  correctos o están vacíos.";
}

?>
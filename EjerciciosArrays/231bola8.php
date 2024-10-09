<?php

$pregunta=$_GET["pregunta"];
$respuestas=["Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", 
"seguro", "yo diría que sí", "ni de coña"];

echo $respuestas[rand(0, count($respuestas)-1)];


?>
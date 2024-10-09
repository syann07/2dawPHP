<?php
    $inicio = $_GET['inicio'];
    $fin = $_GET['fin'];
    for($i=$inicio;$i<=$fin; $i+=2)

        echo "<ol> $i </ol>";
?>
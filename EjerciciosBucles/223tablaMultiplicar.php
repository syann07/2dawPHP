<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TablaMultiplicar</title>
    <style>
        table, th, td{
            text-align:center;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <?php

        $numero=$_GET["num"];
        $multiplicacion;
        for($i=1;$i<=10;$i++){
            $multiplicacion=$numero*$i;
        echo "
            <tr>
                <td>$numero</td>
                <td>*</td>
                <td>$i</td>
                <td>=</td>
                <td>$multiplicacion</td>
            </tr>";
         }
        ?>
    </table>
</body>
</html>




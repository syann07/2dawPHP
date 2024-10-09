<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla multiplicar</title>
    <style>
        thead { background: blue;
        color: white}
        table {with = 100%;
                border: 1px solid #000;
                text-align: center}
        td,tr  { border: 1px solid #000;
                 
                }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <td>X</td>
                <?php for($i=0;$i<=10;$i++){ ?>
                    <td><?=$i;?></td>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php for($j=0; $j<=10; $j++){ ?>
                <tr>
                    <td style="background-color:orange; color:white;"><?=$j;?></td>
                    <?php for($k=0;$k<=10;$k++){ ?>
                        <td><?=$k*$j;?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
       
</body>
</html>

   
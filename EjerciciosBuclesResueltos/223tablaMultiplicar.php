
    <!-- Hay que introducir dos valores, el numero del que quieres saber los multiplos y la cantidad de multiplos que quieres saber. -->
    <?php echo "
    <style>        
    table {
            border: 1px solid black;
            text-align: center;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>a*</th>
                <th>b =</th>
                <th> a*b</th>
            </tr>
        </thead>
        <tbody>";

        $aux = $_GET["numero"];
            for($i = 1; $i<=$_GET["multiplos"]; $i++) {
                echo "<tr>
                <th>$aux*</th>
                <th>$i=</th>
                <th>" . $aux*$i . "</th>
                </tr>";
            }
        
    echo"
        </tbody>

    </table>"
?>
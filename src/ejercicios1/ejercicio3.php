<!-- 3. Crea una tabla en la que se muestre lo siguiente:
	
	1 2 3 4 5 
	6 7 8 9 10
	11 12 13 14 15
	16 17 18 19 20
	21 22 23 24 25 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <table>
        <tr>
            <?php
            for ($i = 1; $i <= 25; $i++) {

                echo "<td>$i</td>";


                if ($i % 5 == 0 && $i != 25) {
                    echo "</tr><tr>";
                }

                if ($i == 25) {
                    echo "</tr>";
                }
            }
            ?>
    </table>
</body>

</html>
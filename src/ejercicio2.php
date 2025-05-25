<!-- 2. Crea una tabla en la que se muestre lo siguiente
	
	1 1 1 1 1
	2 2 2 2 2
	3 3 3 3 3
	4 4 4 4 4
	5 5 5 5 5
	6 6 6 6 6 -->

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
            for ($i = 1; $i <= 6; $i++) {
                echo "<tr>";

                for ($j = 1; $j <= 5; $j++) {
                    echo "<td>$i</td>";
                }

                echo "</tr>";
            }
            ?>
    </table>
</body>

</html>
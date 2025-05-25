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
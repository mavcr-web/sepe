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
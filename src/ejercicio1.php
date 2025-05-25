<?php
$dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes');
$tareas = array('curso', 'gimnasio', 'correr', 'cocina', 'bar');
$filas = array($dias, $tareas);
$colores = array('red', 'blue', 'orange', 'green');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <table border=1px>
        <tr>
            <?php
            foreach ($dias as $dia) {
                echo "<th>$dia</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 0; $i <= 3; $i++) {
            echo "<tr style=color:$colores[$i]>";
            foreach ($tareas as $tarea) {
                echo "<td>$tarea</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
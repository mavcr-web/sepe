<!-- 8. En un documento php, haz un formulario con 124 inputs del tipo text

9. En un documento php: ¿Cómo harías un bucle para recoger los 124 inputs del ejercicio anterior mostrando cada dato?	 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <center>
        <form action="ejercicio8_2.php" method="POST">

            <?php
            for ($i = 1; $i <= 128; $i++) {
                echo "<input name=name_$i placeholder=nombre_$i value=nombre_$i><br>";
            }
            ?>

            <input type="submit">
        </form>
    </center>
</body>

</html>
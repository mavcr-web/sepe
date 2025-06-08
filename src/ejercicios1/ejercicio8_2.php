<!-- 8. En un documento php, haz un formulario con 124 inputs del tipo text

9. En un documento php: ¿Cómo harías un bucle para recoger los 124 inputs del ejercicio anterior mostrando cada dato?	 -->

<?php

$arr = array();

for ($i = 1; $i <= 128; $i++) {

    array_push($arr, $_POST["name_$i"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <center>
        <a href="ejercicio8.php">
            HOME
        </a>
        <?php
        foreach ($arr as $name) {
            echo "<h3>$name</h3>";
        }
        ?>
    </center>
</body>

</html>
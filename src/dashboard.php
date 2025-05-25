<?php

$title = 'DASHBOARD';

$arr = array();

for ($i = 1; $i <= 5; $i++) {

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
    <a href="index.php">
        INDEX
    </a>
    <?php
    foreach ($arr as $name) {
        echo "<h3>$name</h3>";
    }
    ?>
</body>

</html>
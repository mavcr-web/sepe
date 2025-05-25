<?php
$title = 'SEPE';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <h1><?php echo "$title"; ?></h1>
    <form action="dashboard.php" method="POST">

        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<input name=name_$i placeholder=nombre_$i value=nombre_$i><br>";
        }
        ?>

        <input type="submit">
    </form>
</body>

</html>
<?php
// 5. Crea un formulario en el que pidas. Nombre, fecha de nacimiento, sexo, dirección, código postal y provincia. Los datos tendrás que recibirlos en un documento php y los mostrarás en pantalla
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPE</title>
</head>

<body>
    <form action="ejercicio5_2.php" method="POST">

        <input type="text" name="name" placeholder="Escribe tu nombre" required>
        <br>
        <input type="date" name="date" required>
        <br>

        <label>Hombre</label>
        <input type="radio" name="sex" value="hombre" checked>
        <br>

        <label>Mujer</label>
        <input type="radio" name="sex" value="mujer">
        <br>

        <input type="text" name="address" placeholder="Escribe tu Direccion" required>
        <br>

        <input type="number" name="zip" placeholder="Escribe tu Codigo Postal" required>
        <br>

        <select name="province">
            <option>A Coruña</option>
            <option>Lugo</option>
            <option>Ourense</option>
            <option>Pontevedra</option>
        </select>
        <br>

        <input type="submit" value="Registrar">
    </form>

</body>

</html>
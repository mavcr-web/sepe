<?php
    // 5. Crea un formulario en el que pidas. Nombre, fecha de nacimiento, sexo, dirección, código postal y provincia. Los datos tendrás que recibirlos en un documento php y los mostrarás en pantalla

    $name = $_POST['name'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $province = $_POST['province'];

    echo "
        <h3>$name</h3>
        <h3>$date</h3>
        <h3>$sex</h3>
        <h3>$address</h3>
        <h3>$zip</h3>
        <h3>$province</h3>
    ";

?>

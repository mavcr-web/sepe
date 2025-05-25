<!-- 6. Para el ejercicio anterior. Escribe en modo comentario la sentencia SQL para insertar los datos en una tabla "alumnado" -->
 
<?php

    $name = $_POST['name'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $province = $_POST['province'];

    $sql = "INSERT INTO alumnado (name_alu, date_alu, sex_alu, address_alu, zip_alu, province_alu) VALUES ('$name', '$date', '$sex', '$address', $zip, '$province')";

    echo "
        <h1>Registrado</h1>
    ";
?>
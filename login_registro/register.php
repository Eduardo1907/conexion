<?php
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['password'] )){
    $con = mysqli_connect("localhost", "root","", "datos_android");
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    if ($con) {
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$password')";
        if(mysqli_query($con, $sql)){
            echo "Registro exitoso";
        } else echo "Registro fallido";
    } else echo "No a sido posible conectarse a la base de datos";
}
else echo "Faltan datos";
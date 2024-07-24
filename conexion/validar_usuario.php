<?php
include "conexion.php";

//$usu_usuario=$_POST["usuario"];
//$usu_password=$_POST["password"];

$nombre="Eduardo";
$password= "123456789";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE nombre=? AND password=?");
$sentencia->bind_param("ss",$nombre,$password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if($fila = $resultado->fetch_assoc()){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();
?>
<?php
$servidor = "fdb1030.awardspace.net";
$usuario = "4515123_monica";
$contraseña = "22358002Mo";
$base_de_datos = "4515123_monica";


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);


if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

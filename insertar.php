<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contenido = mysqli_real_escape_string($conexion, $_POST['contenido']);

    if (!empty($usuario) && !empty($contenido)) {
        $sql = "INSERT INTO publicaciones (usuario, contenido, fecha) VALUES ('$usuario', '$contenido', NOW())";
        
        if (mysqli_query($conexion, $sql)) {
            echo "Nuevo registro creado exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    } else {
        echo "El nombre y el contenido no pueden estar vacíos.";
    }
}

mysqli_close($conexion);
?>

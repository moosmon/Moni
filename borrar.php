<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($conexion, $_POST['id']);
        
        $sql = "DELETE FROM publicaciones WHERE id = '$id'";
        
        if (mysqli_query($conexion, $sql)) {
            echo "Publicación eliminada exitosamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
    } else {
        echo "El ID no puede estar vacío.";
    }
} else {
    echo "Método de solicitud no válido.";
}

mysqli_close($conexion);
?>

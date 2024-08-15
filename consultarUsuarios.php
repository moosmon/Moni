<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexion, $sql);

$usuarios = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $usuarios[] = $row;
    }
}

echo json_encode($usuarios);

mysqli_close($conexion);
?>

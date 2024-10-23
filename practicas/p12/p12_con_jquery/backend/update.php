<?php
include_once __DIR__ . '/database.php';

// SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
$producto = file_get_contents('php://input');
if (!empty($producto)) {
    $jsonOBJ = json_decode($producto);

    // Validar si el ID y el nombre están presentes
    if (isset($jsonOBJ->id) && isset($jsonOBJ->nombre)) {
        $id = mysqli_real_escape_string($conexion, $jsonOBJ->id);
        $nombre = mysqli_real_escape_string($conexion, $jsonOBJ->nombre);
        $detalles = mysqli_real_escape_string($conexion, $jsonOBJ->detalles);
        // Otros campos también pueden ser añadidos aquí

        // Preparar la actualización
        $actualizacion = "UPDATE productos SET nombre = '$nombre', detalles = '$detalles' WHERE id = '$id' AND eliminado = 0";

        if ($conexion->query($actualizacion) === TRUE) {
            echo json_encode(['status' => 'success', 'message' => 'Producto actualizado correctamente.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el producto: ' . mysqli_error($conexion)]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID o nombre no proporcionados.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No se recibió información del producto.']);
}
?>

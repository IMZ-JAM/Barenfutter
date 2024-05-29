<?php
// Recuperar el ID del producto de la URL
$id_producto = $_GET['id'];

// Aquí puedes realizar la lógica para obtener los datos del producto de la base de datos
// Por ejemplo:
// Conexión a la base de datos
include('conexion_be.php');

// Consulta SQL para obtener los datos del producto con el ID proporcionado
$query = "SELECT * FROM producto WHERE ID = '$id_producto'";
$resultado = mysqli_query($conexion, $query);

// Verifica si se encontraron datos del producto
if (mysqli_num_rows($resultado) > 0) {
    // Obtiene los datos del producto
    $producto = mysqli_fetch_assoc($resultado);
    
    // Guarda los datos en variables individuales (puedes usar estos datos en el formulario de edición)
    $nombre = $producto['nombre_pro'];
    $descripcion = $producto['descripcion_pro'];
    $precio = $producto['precio_pro'];
    $tipo = $producto['tipo_pro'];
    $ubicacion = $producto['ubicacion_pro'];
    $horario = $producto['horario_pro'];
    $foto = $producto['foto_pro'];

    // Redirige al formulario de edición prellenado con los datos del producto
    header("Location: ../formulario_edit.php?id=$id_producto&nombre=$nombre&descripcion=$descripcion&precio=$precio&tipo=$tipo&ubicacion=$ubicacion&horario=$horario&foto=$foto");
    exit;
} else {
    // Si no se encontraron datos del producto, muestra un mensaje de error o realiza otra acción apropiada
    echo "Error: No se encontraron datos del producto.";
}
?>

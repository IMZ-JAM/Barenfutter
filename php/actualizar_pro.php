<?php
// Verifica si se ha enviado el formulario de edición
if(isset($_POST['editar'])) {
    // Incluye el archivo de conexión a la base de datos
    include('conexion_be.php');
    
    // Recupera los datos del formulario de edición
    $id_producto = $_POST['id_producto'];
    $nombre_pro = $_POST['nombre_pro'];
    $descripcion_pro = $_POST['descripcion_pro'];
    $precio_pro = $_POST['precio_pro'];
    $ubicacion_pro = $_POST['ubicacion_pro'];
    $horario_pro = $_POST['horario_pro'];
    $imagen_url = $_POST['imagen_url'];
    $tipo_pro = $_POST['tipo_pro'];

    // Query para actualizar el producto en la base de datos
    $query = "UPDATE producto 
              SET nombre_pro='$nombre_pro', descripcion_pro='$descripcion_pro', precio_pro='$precio_pro', 
                  ubicacion_pro='$ubicacion_pro', horario_pro='$horario_pro', foto_pro='$imagen_url', tipo_pro='$tipo_pro' 
              WHERE ID='$id_producto'";

    // Ejecuta la consulta
    $result = mysqli_query($conexion, $query);

    // Verifica si la consulta fue exitosa
    if($result) {
        echo '
            <script>
                alert("Producto actualizado correctamente");
                window.location = "../mi_productos.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al actualizar el producto");
                window.location = "../mi_productos.php";
            </script>
        ';
    }
} else {
    // Si no se envió el formulario de edición, redirecciona al usuario a alguna página adecuada
    header("Location: ../mi_productos.php");
    exit;
}
?>

<?php
    include('conexion_be.php');

    // Recuperar el ID del producto de la URL
    $id_producto = $_GET['id'];

    // Ejecutar una consulta SQL para eliminar el producto de la base de datos
    // Por ejemplo:
    $query = "DELETE FROM producto WHERE ID = $id_producto";
    $resultado = mysqli_query($conexion, $query);
    
    if ($resultado) {
        echo '
            <script>
                alert("Producto eliminado con éxito");
                window.location = "../mi_productos.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al eliminar el producto");
                window.location = "../mi_productos.php";
            </script>
        ';
    }
?>

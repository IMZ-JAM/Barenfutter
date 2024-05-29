<?php
session_start();

include('conexion_be.php');

// Obtener el ID del usuario de la sesión
$id_usuario = $_SESSION['usuario_cli']['email'];

$nombre_pro = $_POST["nombre_pro"];
$descripcion_pro = $_POST["descripcion_pro"];
$precio_pro = $_POST["precio_pro"];
$ubicacion_pro = $_POST["ubicacion_pro"];
$horario_pro = $_POST["horario_pro"];
$imagen_url = $_POST["imagen_url"];
$tipo_pro = $_POST["tipo_pro"];

// Consulta de inserción con el ID de usuario incluido
$query = "INSERT INTO producto(nombre_pro, descripcion_pro, precio_pro, tipo_pro, ubicacion_pro, horario_pro, foto_pro, usuario_cli) 
VALUES ('$nombre_pro','$descripcion_pro','$precio_pro','$tipo_pro','$ubicacion_pro','$horario_pro','$imagen_url','$id_usuario')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Producto agregado con éxito");
            window.location = "../mi_productos.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Inténtalo de nuevo, producto no agregado");
            window.location = "../agre_pro.php";
        </script>
    ';
}
?>

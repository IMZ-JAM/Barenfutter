<?php
    
    include('conexion_be.php');

    $nombre_pro = $_POST["nombre_pro"];
    $descripcion_pro = $_POST["descripcion_pro"];
    $precio_pro = $_POST["precio_pro"];
    $ubicacion_pro = $_POST["ubicacion_pro"];
    $horario_pro = $_POST["horario_pro"];
    $imagen_pro = $_POST["imagen"];
    $tipo_pro = $_POST["tipo_pro"];

    $query = "INSERT INTO producto(nombre_pro, descripcion_pro, precio_pro, tipo_pro, ubicacion_pro, horario_pro, foto_pro) 
    VALUES ('$nombre_pro','$descripcion_pro','$precio_pro','$tipo_pro','$ubicacion_pro','$horario_pro','$imagen_pro')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
            <script>
                alert("Producto agregado con exito");
                window.location = "../index_ven.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Inténtalo de nuevo, producto no agregado");
                window.location = "../agre_pro.php";
            </script>
        ';
    }


?>
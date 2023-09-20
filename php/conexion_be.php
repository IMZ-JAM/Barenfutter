<?php

    $conexion = mysqli_connect("localhost", "root", "", "bd-barenfutter");


    if ($conexion) {
        echo "Conexión exitosa";
    }
    else{
        echo "Ocurrio un error";
    }
?>
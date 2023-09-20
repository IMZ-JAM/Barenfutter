<?php

    session_start();

    include 'conexion_be.php';

    $id_cliente = $_SESSION['id_cliente'];

    $sql = $conexion->query("SELECT * FROM cliente WHERE id_cliente='$id_cliente");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div>
            <h2>Datos del perfil</h2>
            <h3>Nombre:  </h3> <?= $datos->id_cliente ?>

        </div>
    </center>
</body>
</html>
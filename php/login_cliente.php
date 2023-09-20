<?php

    session_start();
    include 'conexion_be.php';

    $email_cli = $_POST["email_cli"];
    $password_cli = $_POST["password_cli"];

    $validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE email_cli='$email_cli' and password_cli='$password_cli'");

    if ($datos = $validar_login -> fetch_object()) {
        $_SESSION['usuario_cli'] = $datos->email_cli;
        header("location: ../bienvenido.php");
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, favor de verificar los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>
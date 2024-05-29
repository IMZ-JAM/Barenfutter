<?php

include 'conexion_be.php';

$nombre_cli = $_POST["nombre_cli"];
$telefono_cli = $_POST["telefono_cli"];
$email_cli = $_POST["email_cli"];
$usuario_cli = $_POST["usuario_cli"];
$password_cli = $_POST["password_cli"];

$query = "INSERT INTO cliente (nombre_cli, telefono_cli, email_cli, usuario_cli, password_cli) 
VALUES ('$nombre_cli', '$telefono_cli', '$email_cli', '$usuario_cli', '$password_cli')";

// Verificador de correos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE email_cli ='$email_cli'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Correo ya registrado, intentalo de nuevo");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Verificador de nombre de usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario_cli ='$usuario_cli'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Usuario ya registrado, intentalo de nuevo");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado con exito");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Inténtalo de nuevo, usuario no registrado");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);

?>

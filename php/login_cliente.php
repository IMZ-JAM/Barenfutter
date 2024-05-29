<?php

session_start();
include 'conexion_be.php';

$email_cli = $_POST["email_cli"];
$password_cli = $_POST["password_cli"];

// Depuración: Mostrar los valores recibidos
echo "Correo: $email_cli<br>";
echo "Contraseña: $password_cli<br>";

// Verificar si el correo y la contraseña coinciden
$query = "SELECT * FROM cliente WHERE email_cli='$email_cli' AND password_cli='$password_cli'";
$result = mysqli_query($conexion, $query);

// Depuración: Mostrar el resultado de la consulta
if ($result && mysqli_num_rows($result) > 0) {
    echo "Usuario encontrado<br>";

    $datos = mysqli_fetch_assoc($result);
    // Almacenar la información del usuario en la sesión como un array
    $_SESSION['usuario_cli'] = [
        'nombre' => $datos['nombre_cli'],
        'email' => $datos['email_cli'],
        'telefono' => $datos['telefono_cli'],
        'direccion' => 'Dirección de ejemplo' // Ajusta esto según tu base de datos si tienes esta información
    ];
    header("location: ../bienvenido.php");
    exit();
} else {
    echo "Usuario no encontrado<br>";
    echo '
        <script>
            alert("Correo o contraseña incorrecta");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

mysqli_close($conexion);
?>

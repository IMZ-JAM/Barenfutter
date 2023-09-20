<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mi perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/navbar.css" type="text/css">
    
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="assets/images/194343.svg">
    </head>
    <body>
        <header>
            <a href="php/sesion.php" class="logo"><img src="assets/images/194343.svg" height="50px"><span>BARENFUTTER</span></a>
            <ul class="navbar">
                <li><a href="php/sesion.php" class="active">Inicio</a></li>
                <li><a href="info.html" class="">Info</a></li>
                <li><a href="index_ven.php" class="">Vendedor</a></li>
            </ul>
            <div class="main">
                <a href="index_usuario.php" class="user"><i class="ri-user-fill"></i>Mi cuenta</a>
                <a href="php/cerrar_sesion.php">Cerrar sesión</a> 
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        <?php
// Obtener el correo electrónico del usuario desde la sesión
$email_cli = $_SESSION['usuario_cli'];

// Consultar los campos deseados del usuario
$query = "SELECT nombre_cli, telefono_cli FROM cliente WHERE email_cli = ?";
$stmt = mysqli_prepare($conexion, $query);

// Vincular el parámetro con el valor del correo electrónico
mysqli_stmt_bind_param($stmt, "s", $email_cli);

// Ejecutar la consulta preparada
mysqli_stmt_execute($stmt);

// Obtener los resultados de la consulta
$resultado = mysqli_stmt_get_result($stmt);

// Verificar si se encontraron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Obtener el primer registro como un objeto
    $datos = mysqli_fetch_object($resultado);

    // Mostrar los campos deseados del usuario
    echo "Nombre: " . $datos->nombre_cli . "<br>";
    echo "Teléfono: " . $datos->telefono_cli . "<br>";
} else {
    echo "No se encontraron datos del usuario.";
}

// Liberar los resultados y cerrar la conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>

        
        <!--::::Pie de Pagina::::::-->
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="assets/images/194343.svg" alt="">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Somos una app desiñada por estudiante de FIME con el proposito de darle un espacio unico a todo aquella persona que quiera verder o comprar algun prodcuto vendido por los estudiantes en FIME.</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/robson.deleonmorales.5" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/brayanj017/" class="fa fa-instagram"></a>
                        <a href="https://twitter.com/yerimua?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a>
                        <a href="https://www.youtube.com/@inmerzedclan9184" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2021 <b>BARENFUTTER</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>
        
        <script type="text/javascript" src="assets/js/estilo.js"></script>
    </body>
</html>
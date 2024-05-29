<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_cli']) || !is_array($_SESSION['usuario_cli'])) {
    // Si no está autenticado, redirige al usuario a la página de inicio de sesión
    header("Location: index.php");
    exit();
}

// Obtener la información del usuario desde la sesión
$usuario = $_SESSION['usuario_cli'];
?>
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
    <style>
        /* Estilos adicionales */

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: #1a9332;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .profile-header h1 {
            margin-top: 10px;
            font-size: 24px;
        }
        .profile-info {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(34, 35, 39);
            padding: 20px;
            border-radius: 10px;
        }
        .profile-info h2 {
            margin-bottom: 10px;
            font-size: 20px;
        }
        .profile-info p {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .profile-info .fa {
            margin-right: 5px;
            color: #555;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <a href="php/sesion.php" class="logo"><img src="assets/images/194343.svg" height="50px"><span>BARENFUTTER</span></a>
        <ul class="navbar">
            <li><a href="php/sesion.php" class="active">Inicio</a></li>
            <li><a href="index_ven.php" class="">Vendedor</a></li>
        </ul>
        <div class="main">
            <a href="index_usuario.php" class="user"><i class="ri-user-fill"></i>Mi cuenta</a>
            <a href="php/cerrar_sesion.php">Cerrar sesión</a> 
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- Contenido del perfil -->
    <div class="container">
        <div class="profile-header">
            <h1><?php echo htmlspecialchars($usuario['nombre']); ?></h1>
        </div>
        <div class="profile-info">
            <h2>Información del Perfil</h2>
            <p > <i class="fas fa-envelope"></i> Correo electrónico: <?php echo htmlspecialchars($usuario['email']); ?></p>
            <p> <i class="fas fa-phone"></i> Teléfono: <?php echo htmlspecialchars($usuario['telefono']); ?></p>
            
        </div>
    </div>

    <!-- Pie de página -->
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
                <p>Somos una app diseñada por estudiantes de FIME con el propósito de darle un espacio único a toda aquella persona que quiera vender o comprar algún producto vendido por los estudiantes en FIME.</p>
            </div>
            <div class="box">
                <h2>SÍGUENOS</h2>
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

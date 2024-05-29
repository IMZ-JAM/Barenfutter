<?php
session_start();
if (!isset($_SESSION['usuario_cli'])){
    echo '
        <script>
            alert("Favor de iniciar sesión");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
}

include('D:\XAMPP\htdocs\Barenfutter\php\conexion_be.php');

$query = "SELECT nombre_pro, descripcion_pro, precio_pro, tipo_pro, ubicacion_pro, horario_pro, foto_pro FROM producto";
$result = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Barenfutter</title>
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
            <a href="index_ven.php" class="logo"><img src="assets/images/194343.svg" height="50px"><span>BARENFUTTER</span></a>
            <ul class="navbar">
                <li><a href="index_ven.php" class="active">Inicio</a></li>
                <li><a href="mi_productos.php" class="">Mis productos</a></li>
                <li><a href="agre_pro.php" class="">Agregar prod</a></li>
                <li><a href="php/sesion.php" class="">Cliente</a></li>
            </ul>
            <div class="main">
                <a href="index_usuario_ven.php" class="user"><i class="ri-user-fill"></i>Mi cuenta</a>
                <a href="php/cerrar_sesion.php">Cerrar sesión</a> 
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        <div class="fexid-top" id="fixed-cabecera">
            <div>
                <h1>BIENVENIDO!!</h1>
                <h3>AQUI PODRAS ANUNCIAR TODOS TUS PRODUCTOS</h3>
            </div>
        </div>

        <div class="fexid-top" id="image">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="imagen1">
                    <img class="img" src="<?php echo $row['foto_pro']; ?>" alt="Producto" height="300px">
                    <div class="texto1">
                        <div>
                            <h1><?php echo htmlspecialchars($row['nombre_pro']); ?></h1>
                            <hr><br>
                            <h3><?php echo htmlspecialchars($row['descripcion_pro']); ?></h3>
                            <p>Horario: <?php echo htmlspecialchars($row['horario_pro']); ?></p>
                            <p>Teléfono: <?php echo htmlspecialchars($row['ubicacion_pro']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        
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
                    <p></p>
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
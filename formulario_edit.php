<!DOCTYPE html>
<html lang="es">
<head>
    <title>Barenfutter - Editar producto</title>
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
<>
    <!-- ENCABEZADO -->
    <header>
        <a href="index_ven.php" class="logo"><img src="assets/images/194343.svg" height="50px"><span>BARENFUTTER</span></a>
        <ul class="navbar">
            <li><a href="index_ven.php" class="active">Inicio</a></li>
            <li><a href="#" class="">Mis productos</a></li>
            <li><a href="#" class="">Agregar prod</a></li>
            <li><a href="php/sesion.php" class="">Cliente</a></li>
        </ul>
        <div class="main">
            <a href="index_usuario.php" class="user"><i class="ri-user-fill"></i>Mi cuenta</a>
            <a href="php/cerrar_sesion.php">Cerrar sesión</a> 
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- FORMULARIO PARA EDITAR PRODUCTO -->
    <div id="fixed-cabecera-2"> 
        <section class="main-sect">
            <div class="title-container">
                <h1 class="title_from-pro">Editar producto</h1>
            </div>
            <form action="php/actualizar_pro.php" method="POST">
                <input type="hidden" name="id_producto" value="<?php echo $_GET['id']; ?>">
                <div class="main-box">
                    <div class="input-box">
                        <span class="text">Nombre del producto</span>
                        <input type="text" placeholder="Nombre producto" name="nombre_pro" value="<?php echo $_GET['nombre']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="text">Descripción</span>
                        <input type="text" placeholder="Descripción" name="descripcion_pro" value="<?php echo $_GET['descripcion']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="text">Precio</span>
                        <input type="text" placeholder="Precio $" name="precio_pro" value="<?php echo $_GET['precio']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="text">Ubicación</span>
                        <input type="text" placeholder="Ubicación" name="ubicacion_pro" value="<?php echo $_GET['ubicacion']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="text">Horario</span>
                        <input type="text" placeholder="Ejemplo: M1 a M3" name="horario_pro" value="<?php echo $_GET['horario']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="text">Foto del producto (URL)</span>
                        <input type="text" placeholder="URL de la imagen" name="imagen_url" value="<?php echo $_GET['foto']; ?>" required>
                    </div>
                </div>
                <div class="container">
                    <input type="radio" name="tipo_pro" id="circle-1" <?php if ($_GET['tipo'] == "Comida") echo "checked"; ?>>
                    <input type="radio" name="tipo_pro" id="circle-2" <?php if ($_GET['tipo'] == "Bebida") echo "checked"; ?>>
                    <span class="gender">Tipo</span>
                    <div class="category">
                        <label for="circle-1">
                            <span class="circle one"></span>
                            <span class="comida">Comida</span>
                        </label>
                        <label for="circle-2">
                            <span class="circle two"></span>
                            <span class="comida">Bebida</span>
                        </label>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" name="editar" value="Editar">
                </div>
            </form>
        </section>
    </div>

    <!-- PIE DE PÁGINA -->
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
                <p>Somos una app diseñada por estudiantes de FIME con el propósito de brindar un espacio único a todas aquellas personas que quieran vender o comprar algún producto vendido por los estudiantes en FIME.</p>
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
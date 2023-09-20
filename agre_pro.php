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

        <!-- FORMULARIO PARA AGREGAR COMIDA -->
        <div id="fixed-cabecera-2"> 
            <section class="main-sect">
                <div class="title-container">
                    <h1 class="title_from-pro">Agregar producto</h1>
                </div>
                <form action="php/regis_pro.php" method="POST" enctype="multipart/form_data">
                    <div class="main-box">
                        <div class="input-box">
                            <span class="text">Nombre del prodcuto</span>
                            <input type="text" placeholder="Nombre producto" name="nombre_pro" required>
                        </div>
                        <div class="input-box">
                            <span class="text">Descripción</span>
                            <input type="text" placeholder="Descripción" name="descripcion_pro" required>
                        </div>
                        <div class="input-box">
                            <span class="text">Precio</span>
                            <input type="text" placeholder="Precio $" name="precio_pro" required>
                        </div>
                        <div class="input-box">
                            <span class="text">Ubicación</span>
                            <input type="text" placeholder="Ubicación" name="ubicacion_pro" required>
                        </div>
                        <div class="input-box">
                            <span class="text">Horario</span>
                            <input type="text" placeholder="Ejemplo: M1 a M3" name="horario_pro" required>
                        </div>
                        <div class="input-box">
                            <span class="text">Foto del prodcuto</span>
                            <input type="file" name="imagen" required>
                        </div>
                    </div>
                    <div class="container">
                        <input type="radio" name="tipo_pro" id="circle-1">
                        <input type="radio" name="tipo_pro" id="circle-2">
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
                        <input type="submit" name="subir" value="Subir">
                    </div>
                </form>
            </section>
        </div>    

        <!-- PIE DE PAGINA -->
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
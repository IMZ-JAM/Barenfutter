<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Barenfutter</title>
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="assets/css/estilos.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/194343.svg">
    </head>
    <body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <img class="logo" src="/assets/images/194343.svg" height="200px">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__inicar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <img class="logo_2" src="/assets/images/194343.svg" height="200px">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesión</p>
                        <button id="btn__register">Registrate</button>
                    </div>
                </div> 
                <div class="contenedor__login-register">
                    <form action="php/login_cliente.php" method="POST" class="formulario__login">
                        <h2>Inicar Sesión</h2>
                        <input type="email" placeholder="Email" name="email_cli" required>
                        <input type="password" placeholder="Contraseña" name="password_cli" required>
                        <button>Entrar</button>
                    </form>
                    <form action="php/registro_cliente_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_cli" required>
                        <input type="text" placeholder="Telefono" name="telefono_cli" required>
                        <input type="email" placeholder="Email" name="email_cli" required>
                        <input type="text" placeholder="Usuario" name="usuario_cli" required>
                        <input type="password" placeholder="Contraseña" name="password_cli" required>
                        <button>Registrate</button>
                    </form> 
                </div>
            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </body>
</html>
<?php 
    session_start();
    session_destroy();
    $error = 0;

    if(isset($_GET['error'])){
        $error = $_GET['error']; //$error = 1;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ISI</title>
    <link rel="stylesheet" href="./fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <script type="text/javascript" src="js/login.js"></script>
</head>

<body>
    <header class="header__contenedor">
        <h1 class="header__titulo">Isi</h1>

        <nav class="header__navbar">
            <ul class="navbar__list">
                <li class="list_item">
                    <a href="#" >Inicio</a>
                </li>
                <li class="list_item">
                    <a href="index.html">Nosotros</a>
                </li>
                <li class="list_item">
                    <a href="index.html">Tienda</a>
                </li>
                <li class="list_item">
                    <a href="contacto.html">Contacto</a>
                </li>
                <li class="list_item">
                    <a href="" class="activado">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main__contenedor">
        <div>
            <h2 class="titulo">Iniciar Sesión</h2>
            <form action="datos/verificar_usuario.php" method="POST" name="formularioLogin" id="formularioLogin">
                <div class="form_group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="txtusuario" id="txtusuario" required>
                </div>
                <div class="form_group">
                    <label for="txtpassword">Contraseña</label>
                    <input type="password" name="txtpassword" id="txtpassword" required>
                </div>

                <button class="btn btn-primary" onclick="verificarFormulario()">Iniciar Sesión</button>

                <?php if ($error == 1) { ?>
                    <p class="error">Usuario o contraseña incorrectos</p>
                <?php } ?>

            </form>
        </div>
    </main>

    <footer class="footer__contenedor">
        <div class="footer__contenedor-section">
            <p id="parrafo1">&copy; 2024 ISI - Todos los derechos reservados</p>
            <div class="redes__sociales">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>

                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://fontawesome.com/" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>

                <a href="https://linkedin.com/" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
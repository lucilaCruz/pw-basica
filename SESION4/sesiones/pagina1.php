<?php 
    /*las variables de sesión permiten almacenar información que persiste mientras un usuario navega por el sitio web. Estas variables se guardan en el servidor y están disponibles en todas las páginas del mismo sitio mientras la sesión esté activa.  */
    /*Esta función inicia o reanuda una sesión en PHP. Debe colocarse al inicio de cada script en el que quieras acceder a las variables de sesión. */
    session_start();
    //crea la variable sesion
    $_SESSION['titulo'] = "TEMAS DEL CURSO DE PROGRAMACION";
    $_SESSION['nombre'] = "Daniel";
    $_SESSION['dni'] = '78942132';
    echo $_SESSION['dni'];
    //echo "<pre>";
    //print_r($_SESSION);
    //echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA 1</title>
</head>
<body>
    <h2>
        <?php echo $_SESSION['titulo']; ?>
    </h2>

    <ul>
        <li>  
            <a href="pagina2.php" target="_blank">SEMANA 01 - HTML</a>
        </li>
        <li>SEMANA 02 - CSS</li>
        <li>SEMANA 03 - PHP</li>
    </ul>

</body>
</html>
<?php 
    session_start();

    $_SESSION['titulo'] = "TEMAS DEL CURSO DE PROGRAMACION";
    $_SESSION['nombre'] = "Daniel";
    $_SESSION['dni'] = '78942132';

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
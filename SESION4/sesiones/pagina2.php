<?php 
    session_start();
    unset($_SESSION['dni']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA 2</title>
</head>
<body>
    <h2>
        <?php echo $_SESSION['titulo']; ?>
    </h2>
    <h3>
        <?php echo $_SESSION['nombre'].' - ' ?>
    </h3>
    
    <h3>HTML</h3>

    <p>
        Lenguaje que se emplea para el desarrolo de pagina web.
        compuesto por una serie de etiquetas el cual navegador interpreta
        y da forma en la pantalla

    </p>

</body>
</html>
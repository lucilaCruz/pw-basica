<?php 
    session_start();

    //La función unset() se usa para eliminar una variable específica de sesión, pero sin destruir la sesión completa.
    unset($_SESSION['dni']);
    if (isset($_SESSION['dni'])) {
        echo "DNI: ".$_SESSION['dni'];
    }else{
        echo "la variable no existe";
    }
    session_unset();// Elimina todas las variables de sesión
    session_destroy(); //destruye la sesion
    /*Cuando usas unset($_SESSION['clave']); o session_unset();, solo eliminas el contenido de las variables de sesión, pero la sesión sigue activa. */
    echo "Nombre: ".$_SESSION['nombre'];

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
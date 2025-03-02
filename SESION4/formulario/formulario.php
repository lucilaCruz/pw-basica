<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <h1>Formulario de Nombre</h1>
    <!--
    En un formulario HTML, los métodos GET y POST son las dos formas principales de enviar datos al servidor.
    -->
    <!--Usa GET cuando los datos no sean sensibles, como búsquedas o filtros.-->
    <!--Usa POST cuando los datos sean privados o sean formularios largos, como login o pagos. -->

    
    <form action="respuesta.php" method="GET">
        Nombre: <input type="text" name="nombre">
        <button type="submit">Enviar con GET</button>
    </form>

    <form action="pagina2.php" method="POST">
        Nombre: <input type="text" name="nombre">
        <button type="submit">Enviar con POST</button>
    </form>
</body>
</html>
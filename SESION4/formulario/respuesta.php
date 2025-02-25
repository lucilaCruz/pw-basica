<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPUESTA</title>
</head>
<body>
    <h1>RESPUESTA</h1>

    <?php 
        if(isset($_GET['nombre'])){
            $nombre = htmlspecialchars($_GET['nombre']);
            echo "HOLA ".$nombre. "! bienvenido!";
        }else{
            echo "No se ha proporcionado un nombre";
        }
    
    ?>


</body>
</html>
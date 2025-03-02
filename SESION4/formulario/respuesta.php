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
    <?php
        //permite saber con qué método se envió la solicitud
        //htmlspecialchars() es una función de PHP que convierte caracteres especiales en su equivalente en HTML, evitando que se ejecuten scripts maliciosos.
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo "GET: Tu nombre es " . htmlspecialchars($_GET["nombre"]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "POST: Tu nombre es " . htmlspecialchars($_POST["nombre"]);
        }
    ?>
</body>
</html>
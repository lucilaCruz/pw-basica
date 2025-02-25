<?php 
    $pais= $_POST['cbopais'];

    $nombrePais = "";

    if($pais == 'PE'){
        date_default_timezone_set('America/Lima');
        $nombrePais = "PERU";
    }else if($pais == "AR"){
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $nombrePais = "Argentina";
    }else if($pais == 'CO'){
        date_default_timezone_set('America/Bogota');
        $nombrePais = "Colombia";
    }
    $tiempo = date('d/m/Y H:i:s');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORA MUNDIAL</title>
</head>
<body>
    
    <?php if($pais !="0") { ?>
        <h1>
            <?php
                echo "LA FECHA Y HORA DEL PAIS $nombrePais ES: $tiempo";
            ?>
        </h1>
        <?php } else{ ?>
            <h2>POR FAVOR SELECIONA UN PAIS</h2>
    <?php }?>
</body>
</html>
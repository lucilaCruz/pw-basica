<?php
$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;
    case "viernes":
        echo "¡Por fin viernes!";
        break;
    default:
        echo "Es un día común";
}

#switch y condicionales

$estacion = "INVIERNO";

if($estacion == 'VERANO'){
    echo "Hace mucho calor - toca ir a la playa";
}else if($estacion == "INVIERNO"){
    echo "Hace mucho frío -  toca abrigarse";
}else if($estacion == "OTOÑO"){
    echo "El clima es templado";
}else if($estacion == "PRIMAVERA"){
    echo "Estación donde florecen las plantas";
}else{
    echo "No es una estación";
}

echo "<br>";


switch ($estacion) {
    case 'VERANO':
        echo "Hace mucho calor - toca ir a la playa";
        break;
    case 'INVIERNO':
        echo "Hace mucho frío -  toca abrigarse";
        break;
    case 'OTOÑO':
        echo "El clima es templado";
        break;
    case 'PRIMAVERA':
        echo "Estación donde florecen las plantas";
    default:
        echo "No es una estación";
        break;
}
?>
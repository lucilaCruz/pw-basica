<?php
/*while: Se ejecuta mientras la condición sea verdadera. Se usa cuando no sabemos cuántas veces se repetirá.*/
$contador = 1;
while ($contador <= 5) {
    echo "Número: $contador <br>";
    $contador++;
}
/*
do-while: Similar a while, pero se ejecuta al menos una vez, porque la condición se evalúa después de la primera iteración
*/
$contador = 6;
do {
    echo "Número: $contador <br>";
    $contador++;
} while ($contador <= 5);
/*
for: Se usa cuando sabemos cuántas veces se ejecutará el código. Tiene una estructura más ordenada con inicio, condición y actualización.
*/
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}

?>
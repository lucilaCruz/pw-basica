<?php
/*ARREGLOS INDEXADOS Son aquellos donde los elementos tienen índices numéricos, que comienzan desde 0 por defecto. */
$frutas = ["Manzana", "Banana", "Naranja", "Uva"];
echo $frutas[0]; // Imprime "Manzana"
for ($i = 0; $i < count($frutas); $i++) {
    echo "Fruta: " . $frutas[$i] . "<br>";
}

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}

/*arreglos asociativos 
En este tipo de arreglos, los índices son cadenas en lugar de números.
*/

$persona = [
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Lima"
];

echo $persona["nombre"]; // Imprime "Juan"
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor <br>";
}

/*
1. Crea un array indexado con 5 nombres de animales y recórrelo con un foreach para mostrarlos.
2. Crea un array asociativo con datos de un auto (marca, modelo, año) y recórrelo para mostrar la información.
*/
?>
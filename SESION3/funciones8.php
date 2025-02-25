<?php
/*Una función es un bloque de código que se ejecuta cuando se llama. Permite reutilizar código y hacer que un programa sea más modular. */

function nombreFuncion() {
    echo "Hola, esta es una función en PHP.";
}

nombreFuncion(); // Llamamos a la función

//con parametros
function saludar($nombre) {
    echo "¡Hola, $nombre! Bienvenido a PHP.<br>";
}

saludar("Juan");
saludar("María");

//multiples parametros
function sumar($a, $b) {
    echo "La suma de $a y $b es: " . ($a + $b) . "<br>";
}

sumar(5, 3);
sumar(10, 20);

//funciones con valores de retorno
function multiplicar($x, $y) {
    return $x * $y;
}

$resultado = multiplicar(4, 5);
echo "El resultado es: $resultado"; // Imprime: El resultado es: 20

//parametros con valores por defecto
function bienvenida($nombre = "invitado") {
    echo "¡Hola, $nombre! Bienvenido a nuestro sitio.<br>";
}

bienvenida(); // Usa el valor por defecto "invitado"
bienvenida("Carlos"); // Usa el nombre proporcionado
/*
1. Crea una función que reciba un nombre y lo imprima en un mensaje de saludo.
2️. Crea una función que reciba dos números y retorne su multiplicación.
3️. Crea una función que determine si un número es par o impar.
4️. Crea una función que reciba un array de nombres y los recorra con foreach.
5️. Crea una función que reciba una edad y determine si una persona es mayor o menor de edad.*/
?>
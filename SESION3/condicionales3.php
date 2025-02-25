<?php
//condicionales y operadores logicos
//operadores aritmeticos

//OPERADORES LOGICOS
//CONDICIONALES
//OPERADORES ARITMETICOS
$a = 10;
$b = 3;
echo "Suma: " . ($a + $b) . "\n";  // 13
echo "Resta: " . ($a - $b) . "\n"; // 7
echo "Multiplicación: " . ($a * $b) . "\n"; // 30
echo "División: " . ($a / $b) . "\n"; // 3.3333
echo "Módulo: " . ($a % $b) . "\n"; // 1 (resto de la división)
// Área = base × altura

//operadores de comparaación
$x = 10;
$y = 5;

var_dump($x == $y);  // false (10 no es igual a 5)
var_dump($x != $y);  // true  (10 es diferente de 5)
var_dump($x > $y);   // true  (10 es mayor que 5)
var_dump($x < $y);   // false (10 no es menor que 5)
var_dump($x >= 10);  // true  (10 es mayor o igual a 10)
var_dump($x <= 5);   // false (10 no es menor o igual a 5)

$x = 5;
$y = "5";
var_dump($x == $y); // true (valor igual)
var_dump($x === $y); // false (tipo diferente)
var_dump($x != $y); // false (valor es igual)
var_dump($x !== $y); // true (tipo diferente)

//CONDICIONALES
$edad = 20;
$esEstudiante = true;

if ($edad >= 18 && $esEstudiante) {
    echo "Tienes acceso al descuento de estudiante";
} else {
    echo "No tienes acceso al descuento";
}

$nota = 85;

if ($nota >= 90) {
    echo "Tu calificación es A";
} elseif ($nota >= 80) {
    echo "Tu calificación es B";
} else {
    echo "Tu calificación es C";
}

/*
1.	Validar si un usuario puede acceder a un sistema solo si es mayor de edad (18+) y ha ingresado la contraseña correcta.
*/
$edad = 20; // Cambia este valor para probar
$contrasena_correcta = true; // Cambia a false para probar

if ($edad>=18 && $contrasena_correcta) {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}


/*
2. Aplicar un descuento si el usuario es cliente VIP o si ha comprado más de 5 productos.
*/
$es_vip = false; // Cambia a true para probar
$cantidad_productos = 6; // Cambia este valor para probar

if ($es_vip || $cantidad_productos>5) {
    echo "Se aplica descuento";
} else {
    echo "No hay descuento";
}
/*
3.	Determinar si una persona puede votar. Puede hacerlo si tiene entre 18 y 70 años, o si es menor de 18 pero tiene un permiso especial.
*/
$edad = 16; // Cambia este valor para probar
$tiene_permiso = true; // Cambia a false para probar

if (($edad >= 18 && $edad <= 70) || ($edad < 18 && $tiene_permiso)) {
    echo "Puede votar";
} else {
    echo "No puede votar";
}
/*
4.	Verificar que una contraseña sea válida si no es igual a "12345" y tiene al menos 8 caracteres.
*/
$contrasena = "miClaveSegura"; // Cambia este valor para probar

if ($contrasena !== "12345" && strlen($contrasena) >= 8) {
    echo "Contraseña válida";
} else {
    echo "Contraseña no segura";
}
/*
5.	Un alumno aprueba si su nota es mayor o igual a 11, pero si tiene una falta injustificada, automáticamente reprueba.
*/
$nota = 12; // Cambia este valor para probar
$falta_injustificada = false; // Cambia a true para probar

if ($nota >= 11 && !$falta_injustificada) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
/*
6.	Una persona es elegible para un crédito si tiene ingresos mayores a $1000 y no tiene deudas pendientes.
*/
$ingresos = 1200; // Cambia este valor para probar
$tiene_deudas = false; // Cambia a true para probar

if ($ingresos > 1000 && !$tiene_deudas) {
    echo "Elegible para crédito";
} else {
    echo "No elegible";
}
?>
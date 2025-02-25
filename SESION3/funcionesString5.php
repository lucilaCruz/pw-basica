<?php
//concatenar string y funciones de cadena
//CONCATENAR CADENAS
$nombre = "María";
$mensaje = "Hola, " . $nombre . "! Bienvenida.";
echo $mensaje;

//CONCATENACIÓN CON CADENAS DOBLES
$producto = "Laptop";
$precio = 1500;

echo "El producto $producto cuesta S/ $precio.";

//CONVERTIR TEXTO A MAYUSCULA Y MINUSCULA
$texto = "Hola Mundo";
echo strtoupper($texto); // HOLA MUNDO
echo strtolower($texto); // hola mundo

//LONGITUD DE UNA CADENA
$frase = "PHP es genial!";
echo strlen($frase); // 14

//EXTRAER PAARTE DE UNA CADENA
$cadena = "Bienvenido a PHP";
echo substr($cadena, 11, 3); // "a P"

//BUSCAR UNA PALABRA EN UNA CADENA DE TEXTO
//Explicación: strpos($cadena, "texto") devuelve la posición donde empieza el texto buscado o false si no lo encuentra
$frase = "Los dias Martes tenemos clases";
$pos = strpos($frase, "Martes");

if ($pos !== false) {
    echo "Encontrado en la posición: " . $pos;
} else {
    echo "No encontrado";
}
//REEMPLAZAR PALABRAS EN UNA CADENA
$texto = "Me gusta JavaScript";
$nuevo_texto = str_replace("JavaScript", "PHP", $texto);

echo $nuevo_texto; // "Me gusta PHP"
// Explicación: str_replace("buscar", "reemplazo", $cadena) cambia palabras dentro de la cadena.

//ELIMINAR ESPACIOS
$cadena = "   Hola PHP   ";
echo trim($cadena); // "Hola PHP"
//trim($cadena) elimina espacios en blanco al inicio y final.

//EJERCICIO
//Escribe un programa que reciba un nombre y lo convierta a mayúsculas, cuente sus caracteres y lo muestre en una oración completa.
$nombre = "Carlos";
$nombre_mayus = strtoupper($nombre);
$longitud = strlen($nombre);

echo "Hola $nombre_mayus, tu nombre tiene $longitud caracteres.";
?>
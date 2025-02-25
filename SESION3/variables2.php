<?php
//variables y tipo de datos
/*
¿Ques es una variable?
una especie de "contenedor" dentro del cual se guardan los datos.

enguajes fuertemente tipados y lenguajes débilmente tipados.

En lenguajes fuertemente tipados, cada variable se crea declarando qué tipo de datos debe contener. Esta información permanecerá sin cambios durante todo el ciclo de vida del programa

Cuando declaramos una variable, con su tipo, y guardamos un valor dentro de ella, la estamos INICIALIZANDO.

El tipo de un dato se caracteriza por dos piezas de información: el valor en sí mismo y las operaciones con las que podemos manipularlo.

Un número, por ejemplo, puede contener todos los valores que van desde -∞ hasta + ∞ y puede manipularse mediante operaciones lógico-matemáticas.

Una cadena, por su parte, es una secuencia de caracteres alfanuméricos y especiales sobre los que podemos realizar conteos, concatenaciones, etc..

Null (tipo de dato nulo)
El valor especial nulo se refiere a una variable sin valor. Nulo en PHP se considera un tipo de datos.


Tiene que iniciar con $
Tiene que iniciar con una letra o con una _
No puede iniciar con un número
Puede contener caracteres alfanuméricos o _
No puede contener espacios vacíos (a diferencia de, como vemos en el ejemplo, su valor de tipo cadena)


Enteros (int): Los enteros representan números enteros, ya sean positivos o negativos. Por ejemplo, 5, -10, y 0 son enteros en PHP. No hay límite fijo en el tamaño de los enteros, lo que significa que pueden ser bastante grandes.
Flotantes (float): Los flotantes, también conocidos como números de punto flotante, se utilizan para representar números decimales. Por ejemplo, 3.14 o -0.005 son flotantes en PHP.
Cadenas (string): Las cadenas son secuencias de caracteres. Pueden contener letras, números, símbolos y espacios. Por ejemplo, "Hola, mundo" o "123" son cadenas en PHP.
Booleanos (bool): Los booleanos representan valores verdaderos o falsos. En PHP, true y false son los únicos valores booleanos posibles. Se utilizan en evaluaciones lógicas y estructuras de control, como las declaraciones if.
Arreglos (array): Los arreglos son estructuras de datos que pueden contener múltiples valores. Pueden ser arreglos indexados (numéricos) o asociativos (con claves personalizadas).
Objetos (object): Los objetos permiten definir estructuras de datos personalizadas mediante clases. Cada objeto es una instancia de una clase y puede tener propiedades y métodos.
Recursos (resource): Los recursos son tipos de datos especiales utilizados para representar conexiones externas, como recursos de bases de datos o archivos.
Nulo (null): El valor null representa la ausencia de valor. Es útil para inicializar variables antes de asignarles un valor real.
*/
//Variables lógicas (boolean)
$autorizado = true;

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}
//variables enteras

$lado = 14;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";

//Variables decimales (float)
$lado = 14.5;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";

//Variables de cadenas (string)
$saludo = "Hola, Don Pepito";
print "<p>$saludo</p>\n";

/*
Explicación: var_dump() muestra el tipo de dato y su contenido, ideal para depuración.
Explicación: echo permite imprimir múltiples valores separados por comas.
echo "Nombre: ", $nombre, ", Edad: ", $edad;

Explicación: print() retorna 1, lo que permite usarlo en expresiones condicionales.
$mensaje = "Hola Mundo";
if (print($mensaje)) {
    echo " - Se imprimió correctamente.";
}


Usa var_dump() para depuración y ver detalles de variables.
Usa echo cuando necesites mostrar varias cadenas rápidamente.
Usa print si necesitas una función que devuelva un valor (aunque su uso es menos común que echo).
*/

?>
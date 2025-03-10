/*
Una array es una variable especial, que puede contener más de un valor.
Conjunto de datos ordenados por posiciones y todos asociados en una sola variable.
*/
/*------------------------FORMAS DE DECLARAR ARRAYS--------------------------- */
// Arreglos - array: conjunto de datos que almacena tipos de datos como string, number, boolean en una sola variable. Los arreglos se definen en corchetes []

let paises = ['Brasil','Argentina','Bolivia','Ecuador','Colombia','Perú',100,true,'Venezuela'];
//clg :console.log
console.log(paises);
console.table(paises);
console.log(paises[4]);
console.log(paises[3]);
document.write(paises[4],',');
document.write(paises);

// mostrar la longitud del arreglo
let num_paises = paises.length;
console.log('Numero de paises:',num_paises);

// otra forma de definir un arreglo
let frutas = new Array('Uva','Manzana','Melon','Pera','Naranja',100);
//Si pasas un solo número, se crea un array vacío con esa longitud:
let lista = new Array(5);
console.log(lista); // [empty × 5] (Array con 5 espacios vacíos)

console.log(frutas);
//clt :console.table()
console.table(frutas);

// Métodos en los arreglos

//1. push: agrega uno o más valores al final del array
paises.push('España','Mexico','Panama');
console.log(paises);

//2. pop:Elimina el ultimo valor del arreglo
paises.pop();
console.log(paises);

//3: unshift : Permite agregar valores al incio del arreglo

paises.unshift('Alemania','Portugal');
console.log(paises);

// 4: Eliminar el primer valor del arreglo
paises.shift();
console.table(paises);

// 5: indexOf: devuelve la posicion en el arreglo
let posicion = paises.indexOf('Perú');
console.log(posicion);


// 6:splice: Elimina un elemento del arreglo en la posición indicada como parametro 
// splice(posicion,cuantos valores deseamos eliminar), ambos parametros son numericos.
paises.splice(posicion,3)

console.table(paises);
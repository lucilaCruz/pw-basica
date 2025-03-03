// OPERADORES ARITMETICOS

let numero1 = 45;
let numero2 = 6;

// SUMA DENTRO DE JAVASCRIPT
//let suma = numero1 + numero2;
let suma = numero1;
suma += numero2; // suma = suma + numero2;
console.log('La suma es: ',suma);

// RESTA DENTRO DE JAVASCRIPT
let resta = numero1 - numero2;
console.log('La resta es: ',resta);


// MULTIPLICACION DENTRO DE JAVASCRIPT
let multiplicacion= numero1*numero2
console.log('La multiplicación es: ',multiplicacion);


//DIVISION EN JAVASCRIPT
let division =numero1/numero2; // ALEJANDRO
console.log("la division es:" , division);

let divi= numero1/numero2;//JULIO
console.log("la division es:" , divi);

let division_miriam = numero1 / numero2; //MIRIAM
console.log('la division es: ', division_miriam)


// RESIDUO DENTRO DE JAVASCRIPT

let residuo = numero1 % numero2;
console.log('El residuo es: ', residuo);


// convertir un string a entero

let valor1 = 10;
let valor2 = '1.78';


// FORMA DE CONVERTIR UN STRING A ENTERO
// parseInt = es una funcion que convierte el valor a un enter, al menor numero 
// parseFloat = es una funcion que convierte el valor a decimal
let resultado = valor1 + parseFloat(valor2);
let resultado2  = String(valor1) + valor2;
console.log('La suma es: ',resultado);
console.log('El resultado2 es: ',resultado2 );
 
// FORMA DE CONVERTIR NUMERO A STRING
let num1 = 123;
console.log(typeof num1);
const texto = String(num1);
const texto2 = num1.toString();
console.log(texto);
console.log(texto2);
console.log(typeof texto);
console.log(typeof texto2);
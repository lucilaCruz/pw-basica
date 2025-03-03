let nombre = "María";  // String
let edad = 25;         // Number
let esEstudiante = true; // Boolean
let frutas = ["Manzana", "Pera", "Mango"]; // Array
let persona = { nombre: "Carlos", edad: 30 }; // Object
let valorNulo = null; // Null
let sinDefinir; // Undefined

// tipo de datos: undefined: indica que una variable ha sido declarada pero no asigno ningun valor
// tipo de dato: null: representa un valor intencionalmente vació o nulo
console.log(nombre);
console.log(edad);
console.log(esEstudiante);
console.log(frutas);
console.log(persona);
console.log(valorNulo);
console.log(sinDefinir);
console.log(typeof frutas);
console.table(frutas);



// OBJETO DENTRO DE UN ARREGLO
const alumnos = [
    {
        id: 1,
        nombre: 'Alejandro'
    },
    {
        id:2,
        nombre:'Miriam'
    },
    {
        id:3,
        nombre:'Julio'
    }
]

console.log(alumnos);
console.table(alumnos)
console.log(typeof alumnos);



// ARREGLO DENTRO DE UN OBJETO
const trabajador = {
     nombre: 'Lucila',
     apellido: 'Cruz',
     lenguajesProgramacion:['Php','JavaScript']
 } 


console.log(trabajador);
console.table(trabajador);
console.log(trabajador.lenguajesProgramacion[1]);
console.log(typeof trabajador);
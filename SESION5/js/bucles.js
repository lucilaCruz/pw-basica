let estaciones = 'Primavera';

switch (estaciones) {
    case 'Verano':
        console.log('Toca ir a la playa');
        break;
    case 'Invierno':
        console.log('Toca abrigarse hace frío');
        break;
    case 'Otoño':
        console.log('Clima templado');
        break;
    case 'Primavera':
        console.log('Florecen las flores');
        break;
    default:
        console.log('La estación no existe');
        break;
}



// FOR DENTRO DE JAVASCRIPT

for (let i = 1; i < 11; i++) {
    console.log(i);

    if(i == 5){
        console.log('Mi numero es',i);
        break;
    }
    
}

let contador = 1;
let texto = 'Los números son: \n';

while (contador <= 20) {
   // texto = texto + contador + '\n';
    texto += contador + '\n';
    console.log(texto);
    contador++;
}

//alert(texto)

let cont = 1;
do {
    console.log(cont);
    cont++;
} while (cont <= 5);


let numero;
do {
    numero = prompt("Introduce un número mayor a 10")
} while (numero <= 10);

console.log('El numero ingresado es: ', numero);
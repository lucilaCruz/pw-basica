// OPERADORES Y CONDICIONALES

let galletas = false;

if (galletas == true) {
    console.log('Aun quedan galletas para el postre ...');
}else{
    console.log('Se terminaron las galletas');
}

const logueado = true;

if(logueado === true){
    console.log('Acceso correcto');
}else{
    console.log('Verifique la informacion');
}

let usuario = 'admin';
let contraseña = 12345

// uso del operador and (&&) es igual a 'Y'
if(usuario != null && contraseña === '12345'){
    console.log('usuario y contraseña correctamente');
}else{
    console.log('Usuario o contraseña incorrecto, verifique por favor');
}

let fruta = 'Platano';
if(fruta == 'Manzana'){
    console.log('La fruta es de color ROJO');
}else if(fruta == 'Pera'){
    console.log('La fruta es de color VERDE');
}else if(fruta == 'Platano'){
    console.log('La fruta es de color AMARILLO');
}else{
    console.log('No se encontro la fruta');
}
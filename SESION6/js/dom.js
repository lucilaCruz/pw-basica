/*cuando nos referimos al DOM nos referimos a esta estructura de árbol, mediante la cuál podemos acceder a ella y modificar los elementos del HTML desde Javascript, añadiendo nuevas etiquetas, modificando o eliminando otras, cambiando sus atributos HTML, añadiendo clases, cambiando el contenido de texto, etc...*/

//la forma de acceder al DOM es a través de un objeto Javascript llamado document

// 1️⃣ Seleccionar elemento por ID
let titulo = document.getElementById("titulo");
console.log(titulo);

// 2️⃣ Seleccionar elementos por clase
let parrafos = document.getElementsByClassName("parrafo");
console.log(parrafos)
let coleccionHTML = parrafos

// 3️⃣ Seleccionar elementos por etiqueta (tag)
let botones = document.getElementsByTagName("button");
console.log(botones)


// 4️⃣ Seleccionar con querySelector (primer elemento)
let primerParrafo = document.querySelector(".parrafo");
console.log(primerParrafo)

// 5️⃣ Seleccionar todos los elementos que coincidan con querySelectorAll
let todosLosParrafos = document.querySelectorAll(".parrafo");
let listaNodos = todosLosParrafos
//querySelectorAll selecciona los elementos y devulve una NodeList que se puede usar como array pero no actualiza directamente el DOM
console.log(todosLosParrafos)

// 🎯 Función para cambiar el texto del título
document.getElementById("cambiarTextoBtn").addEventListener("click", function() {
    titulo.innerHTML = "¡Texto cambiado con JavaScript!";
});

// 🎯 Función para cambiar el color de los párrafos
document.getElementById("destacarParrafosBtn").addEventListener("click", function() {
    console.log(todosLosParrafos);
    for (let p of todosLosParrafos) {
        p.classList.add("destacado"); // Agrega la clase 'destacado'
    }
});

document.getElementById("agregar").addEventListener("click", function() {
    let nuevoParrafo = document.createElement("p");
    nuevoParrafo.classList.add("parrafo");
    nuevoParrafo.textContent = "Nuevo párrafo agregado";
    document.body.appendChild(nuevoParrafo);

    console.log("HTMLCollection después del cambio:", coleccionHTML); // Se actualiza solo
    console.log("NodeList después del cambio:", listaNodos); // No cambia


    //la lista de nodos se puede recorrer con un forEach
    listaNodos.forEach(p => console.log(p.innerHTML)); 
    //la coleccionHTML se debe convertir a un array
    // ❌ Esto dará error porque HTMLCollection no tiene forEach():
   // coleccionHTML.forEach(p => console.log(p.innerHTML));
    Array.from(coleccionHTML).forEach(p => console.log(p.innerHTML));
});

//EVENTOS

function imagenGrande(nodo) {
    nodo.style.width = "200px";
    nodo.style.height = "200px";
}

function imagenNormal(nodo){
    nodo.style.width = "100px";
    nodo.style.height = "100px";
}

//EVENTOS FORMULARIO

function teclaPulsada(event) {
    //tiene una tecla pulsada
    alert("la tecla pulsada es: "+event.key)
    
}

function liberarTecla(event){
    //libera la tecla que tenia pulsada
    alert("la tecla liberada es: "+event.key)
}
/*

document.getElementById("texto").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        document.getElementById("mensaje").innerText = "Presionaste Enter! 🚀";
    }
});*/
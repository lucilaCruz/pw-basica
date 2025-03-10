function calcular(operador) {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = 0;

    if (isNaN(num1) || isNaN(num2)) {
        alert("Por favor, ingresa números válidos.");
        return;
    }

    switch (operador) {
        case '+': resultado = num1 + num2; break;
        case '-': resultado = num1 - num2; break;
        case '*': resultado = num1 * num2; break;
        case '/': 
            if (num2 === 0) {
                alert("No se puede dividir por cero.");
                return;
            }
            resultado = num1 / num2; 
            break;
        default: alert("Operación no válida.");
    }

    document.getElementById("resultado").innerText = resultado;
}

function saludar(nombre) {
    return "Hola, " + nombre + "!";
}

console.log(saludar("Carlos")); // "Hola, Carlos!"

const multiplicar = (a, b) => a * b;

console.log(multiplicar(4, 5)); // 20


let paises = ['Brasil','Argentina','Bolivia','Ecuador','Colombia','Perú','Venezuela'];

// Formas de recorrer un arreglo

// for

for(let i = 0;i<paises.length; i++){
   // console.log(paises[i]);
   // document.write(paises[i] + '<br>');
}

// while
let j = 0;
while (j<paises.length) {
   // console.log(paises[j]);
    //document.write(paises[j] + '<br>')
    j++;
}

// do while

let y = 0;
do {
    //console.log(paises[y]);
    //document.write(paises[y] + '<br>');
    y++;
} while (y<paises.length);


// forEach
let paises2 = paises.forEach(function(valor, index){
    console.log(index + ':' + valor);
    document.write(index + ':' + valor + '<br>')
})

function buscar(){
    let categoria = document.getElementById('busquedaCategoria').value;
    window.location = "categoria.php?buscarx="+categoria;
}
function abrirFormulario(){
    window.location = "categoria_formulario.php"
}
function editarCategoria(id){
    window.location = "categoria_formulario.php?idx="+id;
}

function eliminarCategoria(id,nombre){
    
    Swal.fire({
        title: "Eliminar Categoria",
        text: "¿Está seguro de eliminar la categoría "+nombre+"?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "SI",
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = "/proyecto_isi/datos/categoria/eliminar_categoria.php?idx="+id;
        }
      });
}

function regresarCategoria(){
    window.location = "categoria.php";
}

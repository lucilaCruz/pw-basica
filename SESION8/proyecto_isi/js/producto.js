function buscar(){
    let producto = document.getElementById('busquedaProducto').value;
    window.location = "producto.php?buscarx="+producto;
}

function abrirFormulario(){
    window.location = "producto_formulario.php"
}

function editarProducto(id){
    window.location = "producto_formulario.php?idx="+id;
}

function eliminarProducto(id,nombre){
    
    Swal.fire({
        title: "Eliminar Producto",
        text: "¿Está seguro de eliminar el producto "+nombre+"?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "SI",
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = "/proyecto_isi/datos/producto/eliminar_producto.php?idx="+id;
        }
      });
}

function regresarProducto(){
    window.location = "producto.php";
}
<?php 
session_start();
require_once('../datos/conexion.php');
if(empty($_SESSION['nombre'])){
    header('Location: ../login.php');
}

$id = 0;
if(isset($_GET['idx'])){
    $id = $_GET['idx'];
}

$titulo = "Registrar Producto";
$nombre_boton = "Registrar";
$accion = "registrar_producto.php";

if($id>0){
    $titulo = "Actualizar Producto";
    $nombre_boton = "Actualizar";
    $accion = "actualizar_producto.php";

    $sql = "SELECT * FROM producto WHERE idproducto = :id";
    $parametros = array(':id'=>$id);
    global $cnx;
    $pre = $cnx->prepare($sql);
    $pre->execute($parametros);

    $datos = $pre->fetch(PDO::FETCH_NAMED);
}

$listaCategoria = array();
$sql = "SELECT idcategoria,nombre FROM categoria WHERE estado = 'N'";
global $cnx;
$pre = $cnx->prepare($sql);
$pre->execute();

$listaCategoria = $pre->fetchAll(PDO::FETCH_NAMED);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISI | DASHBOARD</title>
   <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
   <link rel="stylesheet" href="../css/admin.css">
   <link rel="stylesheet" href="../css/form.css">
   <script type="text/javascript" src="../js/producto.js"></script>
</head>
<body>
    <header class="header_contenedor">
      <h1 class="header_title">DASHBOARD</h1>
      <nav class="header_navbar">
         <ul class="navbar_list">
            <li class="list_item"><a href="inicio.php">Inicio</a></li>
            <li class="list_item"><a href="categoria.php">Categorias</a></li>
            <li class="list_item"><a class="active" href="producto.php">Productos</a></li>
            <li class="list_item"><a href="../login.php">Salir</a></li>
         </ul>
      </nav>
   </header>

   <main class="main_contenedor">
      <div class="contenedor">
         <h1><?php echo $titulo ?></h1>
      </div>
      <hr>
      <div class="container_form">
         <form action="../datos/producto/<?php echo $accion; ?>" class="formulario" method="POST" enctype="multipart/form-data">
            <input type="text" name="idproducto" style="display: none;" value="<?php if($id>0){ echo $datos['idproducto']; } ?>">

            <div class="form_group">
               <label for="nombre">Nombre</label>
               <input type="text" name="nombre" id="nombre" value="<?php if($id>0){ echo $datos['nombre']; } ?>">
            </div>
            <div class="form_group">
               <label for="imagen">Imagen</label>
               <input type="file" name="imagen" id="imagen">
            </div>
            <div class="form_group">
               <label for="precio">Precio</label>
               <input type="text" name="precio" id="precio" value="<?php if($id>0){ echo $datos['precio']; } ?>">
            </div>

            <div class="form_group">
               <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="">Seleccione una categoria</option>
                    <?php 
                    foreach($listaCategoria as $key =>$value){
                        $selected = "";
                        if($id>0 && $datos['categoria_id'] == $value['idcategoria']){
                            $selected = "selected";
                        }

                        echo "<option value='".$value['idcategoria']."' ".$selected.">".$value['nombre']."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="btn_group">
               <button type="submit" class="btn btn-registrar"><i class="fa fa-save"></i> <?php echo $nombre_boton; ?></button>
               <button type="button" class="btn btn-cancelar" onclick="regresarProducto()"><i class="fa fa-times"></i> Cancelar</button>
            </div>
         </form>
      </div>
   </main>
</body>
</html>
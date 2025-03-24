<?php 
session_start();
require_once('../datos/conexion.php');
if(empty($_SESSION['nombre'])){
    header('Location: ../login.php');
    exit;
}

$id = 0;
if(isset($_GET['idx'])){
    $id = $_GET['idx'];
}

$titulo = "Registrar Categoria";
$nombre_boton = "Registrar";
$accion = "registrar_categoria.php";

if($id>0){
    $titulo = "Actualizar Categoria";
    $nombre_boton = "Actualizar";
    $accion = "actualizar_categoria.php";

    $sql = "SELECT * FROM categoria WHERE idcategoria = :id";
    $parametros = array(':id'=>$id);
    global $cnx;
    $pre = $cnx->prepare($sql);
    $pre->execute($parametros);

    $datos = $pre->fetch(PDO::FETCH_NAMED);
}

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
   <script type="text/javascript" src="../js/categoria.js"></script>
</head>
<body>
    <header class="header_contenedor">
      <h1 class="header_title">DASHBOARD</h1>
      <nav class="header_navbar">
         <ul class="navbar_list">
            <li class="list_item"><a href="inicio.php">Inicio</a></li>
            <li class="list_item"><a class="active" href="categoria.php">Categorias</a></li>
            <li class="list_item"><a href="producto.php">Productos</a></li>
            <li class="list_item"><a href="../login.php">Salir</a></li>
         </ul>
      </nav>
   </header>

   <main class="main__contenedor">
    <div class="contenedor">
        <h1><?php echo $titulo; ?></h1>
    </div>
    <hr>
    <div class="container_form">
        <form action="../datos/categoria/<?php echo $accion; ?>" class="formulario" method="POST" enctype="multipart/form-data">
            <input type="text" name="id" style="display: none;" value="<?php if($id>0){ echo $datos['idcategoria']; } ?>">
            <div class="form_group">
               <label for="nombre">Nombre</label>
               <input type="text" name="nombre" id="nombre" value="<?php if($id>0){ echo $datos['nombre']; } ?>">
            </div>
            <div class="form_group">
               <label for="imagen">Imagen</label>
               <input type="file" name="imagen" id="imagen" accept=".jpg">
            </div>
            <div class="btn_group">
                <button class="btn btn-registrar" type="submit"><i class="fa fa-save"></i>
                    <?php echo $nombre_boton; ?>
                </button>
                <button onclick="regresarCategoria()" class="btn btn-cancelar" type="button"><i class="fa fa-times"></i>Cancelar</button>
            </div>

        </form>
    </div>

   </main>

</body>
</html>
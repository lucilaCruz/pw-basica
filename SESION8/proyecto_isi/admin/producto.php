<?php
session_start();
require_once('../datos/conexion.php');

if (empty($_SESSION['nombre'])) {
    header('Location: ../login.php');
}

$buscar = "";
$busqueda = '%' . $buscar . '%';

$sql = "SELECT * FROM producto WHERE estado = 'N' AND nombre LIKE :nombre";
$parametros = array(':nombre' => $busqueda);

global $cnx;
$pre = $cnx->prepare($sql);
$pre->execute($parametros);

$listaProducto = $pre->fetchAll(PDO::FETCH_NAMED);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISI | DASHBOARD</title>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/search.css">
    <script type="text/javascript" src="../js/producto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <h1>LISTA DE PRODUCTOS</h1>
            <div id="busqueda">
                <input type="text" name="busquedaProducto" id="busquedaProducto" placeholder="Buscar producto..." value="<?= $buscar ?>">
                <button type="button" class="btn-buscar" onclick="buscar()"><i class="fa fa-search"></i> Buscar</button>
                <button type="button" class="btn-nuevo" onclick="abrirFormulario()"><i class="fa fa-plus"></i> Nuevo</button>
            </div>
        </div>
        <hr>

        <div id="tabla">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>IMAGEN</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaProducto as $key => $value) { ?>
                        <tr>
                            <td><?= $value['idproducto'] ?></td>
                            <td><?= $value['nombre'] ?></td>
                            <td><?= $value['precio'] ?></td>
                            <td>
                                <img src="../imagen/producto/<?= $value['imagen'] ?>" class="img-producto">
                            </td>
                            <td>
                                <button type="button" class="btn-editar" onclick="editarProducto(<?= $value['idproducto'] ?>)" >
                                    <i class="fa fa-edit"></i>
                                    Editar
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn-eliminar" onclick="eliminarProducto(<?= $value['idproducto'] ?>,'<?= $value['nombre'] ?>')">
                                    <i class="fa fa-trash"></i>
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
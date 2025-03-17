<?php
session_start();
require_once('../datos/conexion.php');

if (empty($_SESSION['nombre'])) {
    header('Location: ../login.php');
}

$buscar = "";
if (isset($_GET['buscarx'])) {
    $buscar = $_GET['buscarx'];
}

$busqueda = '%' . $buscar . '%';

$sql = "SELECT * FROM categoria WHERE estado = 'N' AND nombre LIKE :nombre";
$parametros = array(':nombre' => $busqueda);

global $cnx;
$pre = $cnx->prepare($sql);
$pre->execute($parametros);

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
    <link rel="stylesheet" href="../css/search.css">
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

    <main class="main_contenedor">
        <div class="contenedor">
            <h1>LISTA DE CATEGORIA</h1>
            <div id="busqueda">
                <input type="text" name="busquedaCategoria" id="busquedaCategoria" placeholder="Buscar categoria..." value="<?= $buscar ?>">
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
                        <th>CATEGORIA</th>
                        <th>IMAGEN</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaCategoria as $key => $value) { ?>
                        <tr>
                            <td><?= $value['idcategoria'] ?></td>
                            <td><?= $value['nombre'] ?></td>
                            <td>
                                <img src="../imagen/categoria/<?= $value['imagen'] ?>" class="img-categoria">
                            </td>
                            <td>
                                <button type="button" class="btn-editar">
                                    <i class="fa fa-edit"></i>
                                    Editar
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn-eliminar">
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
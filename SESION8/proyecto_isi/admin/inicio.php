<?php 
    session_start();
    if(empty($_SESSION['nombre'])){
        header('Location: ../login.php');
    }
    $date = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISI | DASHBOARD</title>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
   <link rel="stylesheet" href="../css/admin.css">


</head>
<body>
<header class="header_contenedor">
      <h1 class="header_title">DASHBOARD</h1>
      <nav class="header_navbar">
            <ul class="navbar_list">
                <li class="list_item"><a class="active" href="inicio.php">Inicio</a></li>
                <li class="list_item"><a href="categoria.php">Categorias</a></li>
                <li class="list_item"><a href="producto.php">Productos</a></li>
                <li class="list_item"><a href="../login.php">Salir</a></li>
            </ul>
        </nav>
   </header>

   <main class="main_contenedor">
      <div class="contenedor">
         <h2>Bienvenido <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellido']; ?>   </h2>
         <span>Fecha: <?php echo $date; ?></span>
      </div>
   </main>
</body>
</html>
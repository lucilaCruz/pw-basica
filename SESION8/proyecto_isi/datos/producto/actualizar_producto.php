<?php
	require_once('../conexion.php');

	$id = $_POST['idproducto'];
	$nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    $nombre_imagen = $_FILES['imagen']['name'];
	$ruta_destino = "../../imagen/producto/".$nombre_imagen;
	$extension = $_FILES['imagen']['type'];
	$extensiones_validas = array("image/jpg", "image/png", "image/jpeg");

	if(in_array($extension, $extensiones_validas)){
		move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino);
	}else{
		echo "ARCHIVO DESCONOCIDO";
	}

	$sql = "UPDATE producto SET nombre=:nombre, precio=:precio, categoria_id=:categoria,imagen=:imagen WHERE idproducto=:id ";
	$parametros = array(':nombre'=>$nombre, ':id'=>$id, ':precio'=>$precio, ':categoria'=>$categoria, ':imagen'=>$nombre_imagen);

    try {
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        header('Location: ../../admin/producto.php');
        exit;
    } catch (Exception $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit;
    }
?>
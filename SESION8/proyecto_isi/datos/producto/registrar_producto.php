<?php
	require_once('../conexion.php');
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

	$sql = "INSERT INTO producto(nombre,precio,imagen,estado,categoria_id) VALUES(:nombre,:precio,:imagen,'N',:categoria)";
	$parametros = array(':imagen'=>$nombre_imagen,':nombre'=>$nombre,':precio'=>$precio,':categoria'=>$categoria);

	global $cnx;

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
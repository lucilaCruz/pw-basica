<?php
	require_once('../conexion.php');
	$id = $_GET['idx'];
	$sql = "UPDATE producto SET estado='E' WHERE idproducto=:id ";
	$parametros = array(':id'=>$id);
	global $cnx;

    try {
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        header('Location: ../../admin/producto.php');
        exit;
    } catch (Exception $e) {
        echo "Error al eliminar el producto: ". $e->getMessage();
        exit;
    }
?>
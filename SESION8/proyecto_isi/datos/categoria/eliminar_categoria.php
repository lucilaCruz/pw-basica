<?php 
    require_once '../conexion.php';
    $id = $_GET['idx'];
    $sql = "UPDATE categoria SET estado = 'E' WHERE idcategoria = :idcategoria";
    $parametros = array(':idcategoria'=>$id);
  
    global $cnx;
    try {
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        header('Location: ../../admin/categoria.php');
        exit;
    } catch (Exception $e) {
        echo "Error al eliminar la categoria: ". $e->getMessage();
        exit;
    }
?>
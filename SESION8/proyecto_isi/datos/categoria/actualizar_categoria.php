<?php 
    require_once '../conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    // validaciones
    // if(empty($nombre)){
    //     echo "El nombre de la categoria es obligatorio";
    //     exit;
    // }

    // if(strlen($nombre) < 3){
    //     echo "El nombre de la categoria debe tener al menos 3 caracteres";
    //     exit;
    // }

    $nombre_imagen = $_FILES['imagen']['name'];
    $ruta_destino = "../../imagen/categoria/".$nombre_imagen;
    $extension = $_FILES['imagen']['type'];  // image/jpg
    $extensiones_validas= array("image/jpg", "image/jpeg", "image/png");
    
    if(in_array($extension,$extensiones_validas)){
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino);
    }else{
       echo "La extension de la imagen no es valida"; 
    }
    
    $sql = "UPDATE categoria SET nombre = :nombre,imagen = :imagen WHERE idcategoria = :id";
    $parametros = array(':nombre'=>$nombre, ':id'=>$id, ':imagen'=>$nombre_imagen);

    global $cnx;

    try {
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        header('Location: ../../admin/categoria.php');
        exit;
    } catch (Exception $e) {
        echo "Error al actualizar la categoria: ". $e->getMessage();
        exit;
    }

?>
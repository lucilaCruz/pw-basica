<?php 
    require_once '../conexion.php';
    $nombre = $_POST['nombre'];
    $nombre_imagen = $_FILES['imagen']['name'];
    $ruta_destino = "../../imagen/categoria/".$nombre_imagen;
    $extension = $_FILES['imagen']['type'];  // image/jpg
    $extensiones_validas= array("image/jpg", "image/jpeg", "image/png");
    
    if(in_array($extension,$extensiones_validas)){
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino);
    }else{
       echo "La extension de la imagen no es valida"; 
    }

    $sql = "INSERT INTO categoria (nombre,imagen,estado) VALUES (:nombre,:imagen,'N')";
    $parametros = array(':nombre'=>$nombre,':imagen'=>$nombre_imagen);

    global $cnx;

    try {
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        header('Location: ../../admin/categoria.php');
        exit;
    } catch (Exception $e) {
        echo "Error al resgistrar la categoria: ". $e->getMessage();
        exit;
    }


?>
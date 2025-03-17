<?php
    session_start();
    require_once('conexion.php');

    $usuario = $_POST['txtusuario'];
    $clave   = $_POST['txtpassword'];

    $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND pass = :pass";
    $parametros = array(':usuario'=>$usuario,':pass'=>$clave);

    global $cnx;

    $pre = $cnx->prepare($sql);
    $pre->execute($parametros);

    if($pre->rowCount()>0){
		$datos_usuario = $pre->fetch(PDO::FETCH_NAMED);

		$_SESSION['idusuario'] = $datos_usuario['idusuario'];
		$_SESSION['nombre'] = $datos_usuario['nombre'];
		$_SESSION['apellido'] = $datos_usuario['apellido'];
		$_SESSION['dni'] = $datos_usuario['nro_documento'];

		header('Location: ../admin/inicio.php');
	}else{
		header('Location: ../login.php?error=1');
	}

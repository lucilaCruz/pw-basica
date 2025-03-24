<?php
    try {
        $manejador = "mysql";
        $servidor  = "localhost";
        $usuario   = "root";
        $pass      = "";
        $base      = "isi";
        $cadena = "$manejador:host=$servidor;dbname=$base";
        $cnx = new PDO($cadena, $usuario, $pass, array(
            PDO::ATTR_PERSISTENT => "true", 
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        ));
        //echo "conexion exitosa";

    } catch (Exception $e) {
        echo "Error en la conexion ....";
        exit;
    }

?>
<?php

$tiempo = time();

$fecha = date("Y-m-d H:i:s",$tiempo);



$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

echo $tiempo;
echo '<br>';
echo $fecha;
echo '<br>';
echo 'mes: '.date('n');
echo '<br>';
echo $meses[date('n')-1];
echo '<br>';
echo date('e');

date_default_timezone_set('America/Buenos_Aires');
echo '<hr>';
echo date("Y-m-d H:i:s",$tiempo);

?>
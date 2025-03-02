<?php
date_default_timezone_set('America/lima');

/*
date(formato,timestamp)
formato: Define cómo se mostrará la fecha/hora.
timestamp (opcional): Es un número que representa los segundos desde el 1 de enero de 1970. Si no se especifica, toma la fecha actual.
*/
$tiempo = time();
echo $tiempo."</br>";
$fecha = date("Y-m-d H:i:s",$tiempo);

echo $fecha."</br>";

echo date("Y-m-d")."</br>";   // 2025-03-02
echo date("d/m/Y")."</br>";    // 02/03/2025
echo date("F j, Y")."</br>";   // March 2, 2025
echo date("l, d M Y")."</br>"; // Sunday, 02 Mar 2025

//hora

echo date("H:i:s")."</br>";  // 16:45:30 (24h)
echo date("h:i A")."</br>";  // 04:45 PM (12h)
//dia
echo date("l")."</br>";  // Sunday
echo date("F")."</br>";  // March
//tiempos en segundos
echo time()."</br>";

echo date("Hoy es l, d de F de Y")."</br>";



$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

echo $meses[date('n')-1]."<br>";

?>
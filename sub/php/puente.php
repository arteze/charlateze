<?php
$tiempo_recibido = $_GET["tiempo"];
$tiempo_archivo = 0;
$existe = 0;
$intentos = 0;
$maximo = 1700;
while($intentos<$maximo)
{
	$tiempo_archivo = file_get_contents("./../../datos/tiempo_mensaje.txt");
	if(+$tiempo_archivo>+$tiempo_recibido){
		$existe = 1;
		$intentos = $maximo;
	}
	usleep(10000);
	++$intentos;
}
if($existe){
	$mensaje = file_get_contents("./../../datos/mensajes.json");
	$json = "{\n\t\"tiempo\": $tiempo_archivo,\n\t\"archivo\": $mensaje\n}\n";
	echo $json;
}
?>

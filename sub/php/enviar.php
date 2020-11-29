<?php
$alias = json_decode($_GET["alias"]);
$mensaje = json_decode($_GET["mensaje"]);

$json = json_decode("{}");
$json->alias = $alias;
$json->mensaje = $mensaje;
$cadenizado = json_encode($json);
$tiempo = floor($_SERVER["REQUEST_TIME_FLOAT"]*1000);

file_put_contents("./../../datos/mensajes.json", $cadenizado);
file_put_contents("./../../datos/tiempo_mensaje.txt", $tiempo );
?>

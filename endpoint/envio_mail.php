<?php
include ('envio_formal.php');
$nombre = $_POST['nombre'];
$destino= $_POST['mail'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
enviar ($nombre,$destino,$telefono,$mensaje);
//if ($valor == "1") {
//  $salida = json_encode(["ok"]);
//}else{
 // $salida = "Salida no ok";
//}
//echo $salida;
?>



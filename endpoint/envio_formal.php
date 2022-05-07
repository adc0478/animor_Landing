<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
 function enviar ($nombre,$destino,$telefono,$mensaje){
  require ('../componentes/SMTP.php');
  require ('../componentes/Exception.php');
  require ('../componentes/PHPMailer.php');
  $mail = new PHPMailer;
 try{
  $mail->IsSMTP();
  // Send email using Yahoo SMTP server
  $mail->Host = 'smtp.mail.yahoo.com';
  // port for Send email
  $mail->Port = 465;
  $mail->SMTPSecure = 'ssl';
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->Username = 'arielcismondi@Yahoo.com';
  $mail->Password = 'icdabrntmtghqqrt';
  $mail->From = 'arielcismondi@Yahoo.com';
  $mail->FromName = 'Animor';// frome name
  $mail->AddAddress('adc.0478@gmail.com', 'Ariel');  // Add a recipient  to name
  #$mail->AddAddress('to-Yahoo-address@Yahoo.com');  // Name is optional
  $mail->IsHTML(true); // Set email format to HTML
  $mail->Subject = 'Contacto usuario' . $nombre;
  $salida = "<h3> Nombre contacto : </h3> $nombre <br>";
  $salida .= "<h3> Telefono: </h3> $telefono <br>";
  $salida .= "<h3> Mail: </h3> $destino <br>";
  $salida .= "<h3>Mensaje: </h3>$mensaje<br>";
  $mail->Body    = $salida;
  $mail->Send();
  return "1";
 }catch (Exception $e){
  return "2";
 }
}
?>

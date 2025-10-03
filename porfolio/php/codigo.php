<?php
// captura de variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

// cuerpo de email
$mensaje="
<strong>Nombre:</strong> $nombre<br /><br />
<strong>Correo:</strong> $email<br /><br />
<strong>Consulta:</strong> $consulta<br /><br />
";

// envío de mail
mail("karen.cordoba046@gmail.com", "Consulta Portfolio", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=iso-8859-1\n");

echo 'Tu información ha sido enviada |' ;

?>

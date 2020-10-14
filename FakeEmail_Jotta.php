<?php

$to = "jhon_andres@hotmail.cl"; //Correo electrónico de la víctima a quien desea enviar un correo electrónico

$subject = "google";

$message = "hikakhdhs";

$from = "correoplagiado@gmail.com"; // Correo electrónico de la víctima de quien desea enviar un correo electrónico

$headers = "From:" . $from;

$mail = mail($to,$subject,$message,$headers,$from); // Este mail () hará nuestro trabajo de spoofing

if($mail) 
{
echo "Email enviado con exito".$to;
}
?>
<?php
$to = "camiloaufranc7@gmail.com";
$subject = "Formulario de contacto";
$message = "Mensaje enviado desde el formulario de contacto.\n\n";
foreach ($_POST as $key => $value) {
  $message .= "$key: $value\n";
}
$headers = "From: example@yourwebsite.com" . "\r\n" .
"CC: another@example.com";

mail($to, $subject, $message, $headers);
?>

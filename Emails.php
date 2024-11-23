<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php

/*
 * Mandar emails
 */
$to = "cregueiromartinez@gmail.com"; //hacia quien va el correo
$subject = "confirmacion"; //el tipo de correo
$mensage = "Hola confirma haciendo click en el siguiente enlace"; //mensaje del correo
$from = "admin@dominio.com"; //de quien es el correo
$headers = "From:" . $from; //cabecera

/*
 * metodo de envío del metodo
 */
mail($to,$subject,$mensage,$headers);
echo "El email ha sido enviado";
?>
</body>
</html>


<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Hacer sesiones
 */

session_id("22"); //definimos id
echo session_id();
echo "<br>";
echo session_name(); //muestra el nombre por defecto
session_start();
$_SESSION["iniciada"] = true; //iniciamos el array asociativo con iniciada a true
$_SESSION["nombre"] = "Luisja"; //lo mismo con nombre

var_dump($_SESSION);
echo "<br>";
echo "Nombre " . $_SESSION["nombre"];
echo "<br>";

unset($_SESSION["nombre"]); //eliminamos la sesion de nombre

if(isset($_SESSION["nombre"]) == false){
    echo "El nombre no está definido";
}

session_destroy(); //finalizamos la sesion abierta
?>
</body>
</html>


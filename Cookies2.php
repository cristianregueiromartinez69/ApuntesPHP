<?php
if(isset($_GET["aceptar"])){
    $caducidad = time() + (60*60*24*365);
    setcookie("micookie", 1, $caducidad);
}
?>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Cookies 2, aceptar cookies
 */
if(!isset($_GET["aceptar"]) && !isset($_COOKIE["micookie"])): ?>
<div>
    <h2>Cookies</h2>
    <p>Debes aceptar las cookies o te rompo la cabeza</p>
    <a href="?aceptar=1">Aceptar</a>
</div>
<?php
endif;
?>
</body>
</html>


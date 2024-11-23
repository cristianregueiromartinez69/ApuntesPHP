<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Capturar las variables propagadas
 */
session_start();
/*
 * Las varibales se han propagado
 */
if(isset($_SESSION['iniciada'])){
    echo "Nombre: " . $_SESSION['nombre'] . "<br>";
    echo "Edad: " . $_SESSION['edad'] . "<br>";
}else{
    echo "No se ha iniciado la sesión";
}
?>
</body>
</html>


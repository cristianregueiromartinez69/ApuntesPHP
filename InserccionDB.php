<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
    $minombre = $_GET["nombre"];

    $servidor = "localhost";
    $usuario = "root";
    $password = "";

    $conexion = mysqli_connect($servidor, $usuario, $password) or die("Errorde conexion a la base de datos");

    mysqli_select_db($conexion, "usuarios");
    $insertar = "INSERT INTO clientes (nombre) VALUES ('$minombre')";
    mysqli_query($conexion, $insertar);
?>
</body>
</html>


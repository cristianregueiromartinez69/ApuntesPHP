<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Pasar sesiones entre páginas
 */
session_start();
$_SESSION['iniciada'] = true;
$_SESSION['nombre'] = 'Albertito';
$_SESSION['edad'] = 56;

echo " identificador de la sesion: ". session_id() ."<br>";
echo " nombre de la sesion: ". session_name() ."<br>";

echo "Nombre: " . $_SESSION['nombre'] . "<br>";
echo "Edad: " . $_SESSION['edad'] . "<br>";

echo "<a href = 'Sesiones3.php'>Comprobar las variables en otra web</a>";
echo "<br>";

echo "<a href = 'Sesiones4.php'>Finaliza la sesion</a>";
echo "<br>";
?>
</body>
</html>


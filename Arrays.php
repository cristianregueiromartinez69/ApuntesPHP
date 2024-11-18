<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
//Arrays sintaxis larga
$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
//Arrays sintaxis corta
$temperaturas = [23,14,31,10];
//Arrays vacios con 15 posiciones
$vacio = array(15);
//Arrays vacio sin posiciones establecidas
$vacio2 = array();

//mostrarlos, esto sadrá martes
echo $dias[1];
echo "<br>";
echo $temperaturas[0];

//funcion var_dump, nos indica de manera estructurada la composición del array
var_dump($dias);
echo "<br>";
var_dump($temperaturas);
echo "<br>";
?>
</body>
</html>


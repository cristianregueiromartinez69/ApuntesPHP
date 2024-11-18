<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * sort -> ordena un array
 * rsort -> ordena de forma reversa
 * asort -> ordena un array manteniendo los indices
 * ksort -> me ordena por los indices, es mejor usarlo con un array asociativo
 * shuffle -> ordenar de forma aleatoria los elementos del array y asigna nuevos
 */
$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
var_dump($dias);
echo "<br>";

sort($dias);
var_dump($dias);
echo "<br>";

rsort($dias);
var_dump($dias);
echo "<br>";

asort($dias);
var_dump($dias);
echo "<br>";

$arrayNombres = array("Javier" => "29", "Patricia" => "16", "Emilio" => "26");
var_dump($arrayNombres);
echo "<br>";

ksort($arrayNombres);
var_dump($arrayNombres);
echo "<br>";

var_dump($dias);
echo "<br>";
shuffle($dias);
var_dump($dias);
echo "<br>";
?>
</body>
</html>


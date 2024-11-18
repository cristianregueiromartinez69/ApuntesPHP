<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones para manejar arrays
 */
$numeros1 = array(11,22,33);
$numeros2 = array(11,33,55);

$colores1 = array("color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "verde");
$colores2 = array("color1" => "rojo", "color2" => "amarillo", "color3" => "azul", "color4" => "rosa");

/*
 * Comprueba que elementos del primer array no están en el segundo
 */
$diferencias1 = array_diff($numeros1, $numeros2);
var_dump($diferencias1);

$diferencias2 = array_diff($colores1, $colores2);
var_dump($diferencias2);

/*
 * array_merge -> permite unir 2 arrays
 */
$a1 = array("rojo", "verde");
$a2 = array("azul", "amarillo");
$unido = array_merge($a1, $a2);
var_dump($unido);
?>
</body>
</html>


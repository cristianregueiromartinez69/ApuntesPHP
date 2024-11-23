<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones de archivo de numeros
 */

$edad = 22;
$nota = 7.3;

if(is_int($edad)){
    echo "edad es un entero";
}
/*
 * comprobamos si un numero es decimal o entero
 */
echo "<br>";
if(is_int($nota)){
    echo "nota es un entero";
}
elseif (is_float($nota)){
    echo "nota es un decimal";
}

/*
 * funcion number_format -> Dar formato a un numero
 */
echo "<br>";
echo number_format("100000"); //formateamos un numero a el estilo de PHP
echo "<br>";
echo number_format("100000", 2); // lo mismo pero con 2 decimales
echo "<br>";
echo number_format("100000", 2, ",", "."); // indicamos que los millares van con coma y los decimales con punto

?>
</body>
</html>


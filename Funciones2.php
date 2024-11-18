<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/**
 * funciones pasar parámetros por valor y por referencia
 */
$num1 = 4;

function miFuncion($nume1){
    $nume1 += 2;
}

function miFuncion2(&$nume1){
    $nume1 += 2;
}

/**
 * Con esto hacemos que el valor de la variable num1:
 * 1. primer caso, cambia el valor solo en la funcion
 * 2. cambia el valor en la funcion y fuera
 */
miFuncion($num1);
echo $num1."<br>";
miFuncion2($num1);
echo $num1."<br>";
?>
</body>
</html>


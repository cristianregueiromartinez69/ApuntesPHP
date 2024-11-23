<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones para redondear un numero
 * round() -> redondea con la precisión indicada
 * ceil() -> redondea hacia arriba al siguiente entero
 * floor() -> redondea hacia abajo al siguiente entero
 */

echo(round(0.60));
echo "<br>";
echo(round(0.50));
echo "<br>";
echo(round(0.49));
echo "<br>";
echo(round(-4.40));
echo "<br>";
echo(round(-4.60));
echo "<br>";
echo(round(4.95754,2));
echo "<br>";

/*
 * Redondea al siguiente numero por arriba
 */
echo(round(1.5,0,PHP_ROUND_HALF_UP));
echo "<br>";
echo(round(1.5,0,PHP_ROUND_HALF_EVEN));
echo "<br>";

echo(ceil(0.60));
echo "<br>";
echo(ceil(0.40));
echo "<br>";
echo(ceil(5));
echo "<br>";
echo(ceil(5.1));
echo "<br>";


echo(floor(0.60));
echo "<br>";
echo(floor(0.40));
echo "<br>";
echo(floor(5));
echo "<br>";
echo(floor(5.1));
echo "<br>";
?>
</body>
</html>


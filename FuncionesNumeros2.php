<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones para trabajar con numeros 2
 */

echo (abs(-6.7)); //valor absoluto de un numero
echo "<br>";
echo(max(2,4,5,10,23)); //numero maximo de un conjunto
echo "<br>";
echo(min(2,4,5,10,23)); //numero minimo de un conjunto
echo "<br>";

echo(rand());
echo "<br>";

echo rand(10, 100); // podemos indicar el rango en que se genera un random
echo "<br>";

echo(sqrt(9)); //raiz cuadrada de un numero
echo "<br>";

/*
 * Transformar sistema de numeracion
 * decbin -> transforma de decimal a binario
 * dechex -> pasar de decimal a hexadecimal
 * bindec -> pasa de binario a decimal
 */
echo decbin("3");
echo "<br>";
echo decbin("100");
echo "<br>";

echo dechex("10");
echo "<br>";
echo bindec("1011");
echo "<br>";

?>
</body>
</html>


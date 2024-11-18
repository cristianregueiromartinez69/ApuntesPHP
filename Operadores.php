<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php

/*
 * Operadores aritmeticos
 */


//suma
$num1 = 5;
$num2 = 10;

echo $num1 + $num2;
echo "<br>";
//resta
$num1 = 10;
$num2 = 20;
echo $num1 - $num2;
echo "<br>";
//multiplicacion
$num1 = 40;
$num2 = 3;
echo $num1 * $num2;
echo "<br>";
//division
$num1 = 120;
$num2 = 10;
echo $num1 / $num2;
echo "<br>";
//Modulo
$num1 = 50;
$num2 = 5;
echo $num1 % $num2;
echo "<br>";
//exponenciacion
$num1 = 10;
$num2 = 2;
$potencia = $num1 ** $num2;
echo "El numero " . $num1 . " elevado a: " . $num2 . " es: " . $potencia;
echo "<br>";

/*
 * Operadores de asignacion
 */
$numEjemplo = 10;
$numEjemplo2 = 5;
$numEjemplo3 = 0;

$numEjemplo3 = $numEjemplo2;
echo $numEjemplo3;
//Asignacion de suma
echo "<br>";
echo "La suma de " . $numEjemplo2 . " + " . $numEjemplo3 . " es: " . $numEjemplo2+=$numEjemplo3;
echo "<br>";
echo "La resta de " . $numEjemplo2 . " - " . $numEjemplo3 . " es: " . $numEjemplo2-=$numEjemplo3;
echo "<br>";
echo "La multiplicacion de " . $numEjemplo2 . " * " . $numEjemplo3 . " es: " . $numEjemplo2*=$numEjemplo3;
echo "<br>";
echo "La division de " . $numEjemplo2 . " / " . $numEjemplo3 . " es: " . $numEjemplo2/=$numEjemplo3;
echo "<br>";

/*
 * Operadores de comporacion
 */

$numComp1 = 5;
$numComp2 = 10;
$numComp3 = 5;
$numComp4 = "5";
if($numComp1 == $numComp2){
    echo "El numero " . $numComp1 . " es: " . $numComp2 . "<br>";
}
else{
    echo "El numero " . $numComp1 . " no es: " . $numComp2 . "<br>";
}

//Otros operadores
/*
 * > -> mayor que
 * < -> menor que
 * <= -> menor igual que
 * >= -> mayor igual que
 * != -> distinto de
 * ? -> operador ternario
 * === -> mismo valor y mismo tipo
 * !== -> distinto de mismo valor y mismo tipo
 * <> -> igual que !=, hacen lo mismo
 */
if($numComp2 <> $numComp4){
    echo "El numero " . $numComp3 . " no es: " . $numComp4 . "<br>";
}
?>
</body>
</html>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Operadores incremento y decremento
 * ++ -> incremento
 * -- -> decremento
 */
$num1 = 5;
$num2 = 10;

//ojo, si ponemos el ++ despues de la variable,
// primero la muestra, pero no la incrementa
// hasta despues de llamarla de nuevo
echo $num1++;
echo "<br>";
echo $num2++;
echo "<br>";
echo $num1--;
echo "<br>";
echo $num2--;
echo "<br>";
echo ++$num1;
echo "<br>";
echo ++$num2;
echo "<br>";
echo --$num1;
echo "<br>";
echo --$num2;
echo "<br>";

/*
 * Operadores lógicos
 * and o && -> Los 2 valores son verdad
 * or o ||-> Una de las 2 tiene que ser verdad
 * xor -> Solo es verdad cuando uno de los 2 es verdad
 * not o !(variable)-> declaramos lo contrario a lo que vale un booleano
 */

$num1Logico1 = 5;
$num1Logico2 = 10;
$num1Logico3 = 5;
$num1Logico4 = 20;
$num1Logico5 = 5;
$num1Logico6 = false;
$num1Logico7 = true;

if($num1Logico1 == $num1Logico3 && $num1Logico3 == $num1Logico5){
    echo "Los numeros son iguales" . "<br>";
}

if($num1Logico1 == $num1Logico3 || $num1Logico3 == $num1Logico4){
    echo "Al menos 1 numero coincide" . "<br>";
}

if($num1Logico1 == $num1Logico3 xor $num1Logico3 == $num1Logico4){
    echo "Los numeros son iguales con xor" . "<br>";
}

if(!$num1Logico6){
    echo "no es true" . "<br>";
}
if($num1Logico7){
    echo "es true" . "<br>";
}



?>
</body>
</html>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones
 */

//funciones con parámetros y un return
function sumar($a,$b)
{
    return $a + $b;
}
$resultado = sumar(10,10);
echo "La suma es: ".$resultado . "<br>";

//funcion sin nada, damian si ve esto te hace un mataleon
function saludar()
{
echo "Hola mundo"."<br>";
}
saludar();

/*
 * Funcion con parámetros pero sin return
 */
function multiplicacion($a,$b)
{
    echo "La multiplicacion es: ".$a * $b . "<br>";
}
multiplicacion(10,10);
?>
</body>
</html>
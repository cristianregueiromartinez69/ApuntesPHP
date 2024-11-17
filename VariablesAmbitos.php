<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
//Ambitos de variables, globales y predifinas
$numero = 22;

/*
 * Debemos poner la palabra global dentro de la funcion
 * Esto es por si queremos que esa variable sea accesible desde otros lados
 */
function prueba(){
    global $numero;
    echo $numero ;
    echo "<br>";
}
prueba();

//PREDIFINIDAS
$otro_numero = 33;
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Puerto del servidor: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "La variable numero vale: " . $GLOBALS["numero"] . "<br>";
?>
</body>
</html>



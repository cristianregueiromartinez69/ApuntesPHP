<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
    /*
     * Funciones variadas de arrays
     */

$frutas = array("naranja", "platano", "manzana", "frambuesa");

/*
 * nos dice la cantidad de elementos del array
 */
$elementos = count($frutas);
echo $elementos . "<br>";
var_dump($frutas);
echo "<br>";

/*
 * nos dice el puntero del array
 */
$actual = current($frutas);
echo $actual . "<br>";

/*
 * movemos el puntero al final del array
 */
end($frutas);
$actual = current($frutas);
echo $actual . "<br>";

/*
 * volvemos a mover el puntero al principio
 */
reset($frutas);
$actual = current($frutas);
echo $actual . "<br>";

$meses = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo");
$clave = array_search("Mayo", $meses);
echo $clave .  "<br>";
if($clave){
    echo $clave . " " . $meses[$clave] . "<br>";
}
else{
    echo "Elemento no encontrado";
}
?>

</body>
</html>


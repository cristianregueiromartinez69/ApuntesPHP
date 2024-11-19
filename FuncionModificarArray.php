<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
    /*
     * Funciones que modifican el contenido del array
     */
$frutas = array("naranja", "platano", "manzana", "frambuesa");

var_dump($frutas);
echo "<br>";

/*
 * metodo que elimina un elemento en primera posicion
 */
$eliminar = array_shift($frutas);
var_dump($frutas);
echo "<br>";

/*
 * metodo para añadir un elemento en primera posicion
 */
array_unshift($frutas, "pera");
var_dump($frutas);
echo "<br>";

/*
 * elimina el ultimo elemento del array
 */
array_pop($frutas);
var_dump($frutas);
echo "<br>";

/*
 * añade elementos al final del array
 */
array_push($frutas, "sandia", "melocoton");
var_dump($frutas);
echo "<br>";
?>
</body>
</html>


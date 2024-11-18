<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * include -> mete un codigo de fichero pho dentro de otro php
 */
echo "Soy el primer fichero con include"."<br>";
include "includeRequireGoTo2.php";
include_once "includeRequireGoTo2.php"; //solo lo introduce 1 vez

/*
 * estamos metiendo el codigo del fichero 2 en el fichero 1
 * Si no lo encuentra, salta un warning
 */


/*
 * Sentencia Require
 * funciona exactamente igual que include
 */
echo "Soy el primer fichero con require"."<br>";
require "includeRequireGoTo2.php";
require_once "includeRequireGoTo2.php";


/*
 * sentencia GoTo
 * Saltamos de una seccion de codigo a otra
 * NO ES RECOMENDABLE, NO LO USES GILIPOLLAS
 */
echo "Inicio del programa.\n";

$valor = 3;

if ($valor < 5) {
    echo "El valor es menor que 5. Saltando al final...\n";
    goto fin; // Salta directamente a la etiqueta "fin".
}

echo "Este mensaje no se mostrará si el valor es menor que 5.\n";

fin: // Etiqueta de destino para el goto.
echo "Fin del programa.\n";
?>
</body>
</html>
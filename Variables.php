<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
  /*
   * Comienzan por $
   * Debe comenzar por
   * - Letra
   * - Caracter subrayado
   * - No usar palabras reservadas
   * $Nombre_variable = valor
   */
$edad = 33;
$estatura = 1.24;
$nombre = "Luis";
$profesor = true;

echo "Tengo $edad años";
echo "<br>";
echo "Me llamo $nombre";
echo "<br>";
echo "Mi estatura es de $estatura";
echo "<br>";
echo "¿Soy profesor? ".json_encode($profesor);

/*
 * Para concatenar usamos (.)
 * Si usamos commillas dobles no es necesario
 * podemos usar la etiqueta <br> para hacer saltos de linea
 *
 */

?>
</body>
</html>



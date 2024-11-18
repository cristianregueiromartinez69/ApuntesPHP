<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
//Arrays asociativos, sus keys son Strings personalizados
$exploradores = array("explorador1" => "Chrome", "explorador2" => "Firefox", "explorador3" => "Opera", "explorador4" => "Internet Explorer");

//Otro array asociativo con otro formato
$datos = array("nombre" => "Pepe", "edad" => 65, "profesor" => true, 3 => 100);

echo "Explorador 3: " . $exploradores["explorador3"] . "<br>";

echo "Nombre: " . $datos["nombre"] . "<br>";
echo "Edad: " . $datos["edad"] . "<br>";
echo "Profesor: " . $datos["profesor"] . "<br>";
echo "Numero: " . $datos[3] . "<br>";

//como salen con var_dump
var_dump($exploradores);
echo "<br>";
var_dump($datos);
echo "<br>";

/*
 * Con los arrays asociativos podemos darle nombres a las posiciones
 * Me parece bastante potente
 */
?>
</body>
</html>
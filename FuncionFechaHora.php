<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Diferentes formato de fecha y hora
 */
echo date("Y");
echo "<br>";
echo date("d M Y");
echo "<br>";
echo date("d/m/Y");
echo "<br>";
echo date("d/m/Y h:i:s");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("l jS \of F Y h:i:s A");
echo "<br>";

/*
 * Funcion getDate que devuelve un array asociativo
 */

$hoy = getdate();
var_dump($hoy);

if($hoy["month"] == "November"){
    echo "Estamos en noviembre" . "<br>";
}

/*
 * funcion date_default_timezone_get() -> Nos devuelve la zona horaria de donde estamos
 */
echo "Zona horaria: " . date_default_timezone_get();
echo "<br>";

/*
 * date_default_timezone_set -> Metodo para forzar la zona horaria
 */
date_default_timezone_set("America/Mexico_City");
echo "Zona horaria: " . date_default_timezone_get();
echo "<br>";

?>
</body>
</html>


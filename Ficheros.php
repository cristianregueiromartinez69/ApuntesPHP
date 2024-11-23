<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Practicas PHP</title>
</head>
<body>
<?php
/*
 * Apertura ficheros en diferentes modos
 */
/*
 * Con esto vamos a leer el contenido
 */
$miarchivo =  fopen("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero1.txt", "r+");
if(!$miarchivo){
    echo "No se pudo abrir el archivo";
}
/*
 * utilizamos fread y metemos como parámetro la variable que tiene el fichero
 * con echo lo leemos
 */
else{
    $contenido = fread($miarchivo, filesize("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero1.txt"));
    echo $contenido;
}
echo "<br>";
/*
 * Con esta función vamos leyendo caracter a caracter
 * Metemos lo que sacamos en un while para leer todo el fichero
 */
while(feof($miarchivo) == false){
    echo fgetc($miarchivo); //caracter a caracter
    echo fgets($miarchivo); //linea a linea
}

/*
 * Funcion que muestra todo el fichero de golpe
 */
$todo = file_get_contents("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero1.txt");
echo $todo;

/*
 * con esto metemos el fichero dentro de un array
 * con var_dump vamos viendo la información del array
 */
$arrayarchivo = file("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero1.txt");
var_dump($arrayarchivo);

/*
 * Mucho ciudado con abrir el fichero con solo w ya que lo va a borrar para sobresscribir
 */
$miarchivo2 = fopen("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero2.txt", "w");

/*
 * Si existe lo fulmina y crea uno nuevo, si no existe, crea uno nuevo
 */
$miarchivo3 = fopen("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero3.txt", "w");


?>
</body>
</html>


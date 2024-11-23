<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Escritua fichero
 */
$miarchivo = fopen ("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero3.txt","a+"); // el a+ es añadir

/*
 * Con esto escribimos dentro del fichero 3
 * asegurarse de cerrar con fflush
 */
fwrite($miarchivo, "Escribiendo dentro del fichero 3");
fflush($miarchivo);

/*
 * ESte metodo nos dice el estado de un fichero
 * Nos devuelve un array
 */
$arrayInfo = stat("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero2.txt");
var_dump($arrayInfo);

/*
 * Esto nos va a decir el tamaño de un archivo en bytes
 */
echo filesize("C:/Users/crm23/OneDrive/Escritorio/dam2Clase/SXE/PHP/fichero3.txt")
?>
</body>
</html>


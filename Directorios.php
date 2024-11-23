<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Funciones asociadas a directorios
 */
echo getcwd(); //muestra el directorio actual

/*
 * Nos muestra la informacion y contenido del directorio
 */
$directorios = scandir(getcwd());
var_dump($directorios);

/*
 * funcion que hace que cambiemos de directorio
 */
chdir("../");
echo getcwd();
?>
</body>
</html>


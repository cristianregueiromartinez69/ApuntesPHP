<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Definimos las variables de conexion
 */
$servidor = "localhost";
$usuario = "root";
$password = "";

//declaramos una variable igual al metodo de establecer la conexion
$conexion = mysqli_connect($servidor, $usuario, $password);
if(!$conexion){
    echo "La conexion ha fallado";
}
else{
    //definimos la sentencia para crear una base de datos
    $sql = "CREATE DATABASE usuarios";
    if(mysqli_query($conexion, $sql)){
        echo "La base de datos se ha creado correctamente";
    }
    else{
        echo "error: ".mysqli_error($conexion);
    }
    /*
     * IMPORTANTE:
     * 1. debemos indicar sobre que base de datos vamos a operar
     * 2. introducimos una sentencia para crear una tabla
     * 3. la ejecutamos con mysqli_query
     */
    mysqli_select_db($conexion, "usuarios");
    $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";
    mysqli_query($conexion, $sql2);
}
?>
</body>
</html>


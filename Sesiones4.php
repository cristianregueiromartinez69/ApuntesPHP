<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * destruir la sesion
 */
session_start();
/*
 * Las varibales se han propagado
 */
if(isset($_SESSION['iniciada'])) {
    //destruimos la sesion y quitamos las variables
    session_unset();
    session_destroy();
    if(isset($_SESSION['nombre'])){
        echo "Nombre: " . $_SESSION['nombre'] . "<br>";
    }else{
        echo "la variable de sesión de nombre no está definida";
    }
}
else{
    echo "La sesion no ha sido definida";
}
?>
</body>
</html>


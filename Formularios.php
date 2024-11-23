<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Formularios 1, recoger datos de formulario
 */
if(isset($_POST["usuario"])){ //recogemos el usuario del html
    if(!empty($_POST["usuario"])){ //comprobamos si no está vacío
        $usuario = $_POST["usuario"]; //almacenamos la variable
        echo "Nombre del usuario: ".$usuario."<br>";
    }
}
//lo mismo con contraseñas
if(isset($_POST["password"])){ //recogemos el usuario del html
    if(!empty($_POST["password"])){ //comprobamos si no está vacío
        $password = $_POST["password"]; //almacenamos la variable
        echo "Contraseña: ".$password."<br>";
    }
}
?>
</body>
</html>


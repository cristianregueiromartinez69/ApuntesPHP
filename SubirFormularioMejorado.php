<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Objetivo: subir una imagen a una carpeta con php
 *
 */
$directorioSubida = "uploads/"; //carpeta de destino
$max_file_size = "512000"; //tamaño maximo del fichero a subir
$extensionesValidas = array("jpg", "gif", "png"); //extensiones permitidas

//comprobamos si se dio al boton de enviar
if(isset($_POST['submit']) && isset($_FILES['imagen'])){
$errores = 0;

//almacenamos valores en variables para ssaber lo que mando el usuario
$nombreArchivo = $_FILES['imagen']['name'];
$fileSize = $_FILES['imagen']['size'];
$directorioTemp = $_FILES['imagen']['tmp_name'];
$tipoArchivo = $_FILES['imagen']['type'];

/*
 * Informacion del archivo
 */
$arrayArchivo = pathinfo($nombreArchivo);


$extension = $arrayArchivo["extension"];

/*
 * SI hay errores, no se sube la imagen
 */
if(!in_array($extension, $extensionesValidas)){
    echo "Extension no válida";
    $errores = 1;
}
if($fileSize > $max_file_size){
    echo "La imagen supera el tamaño máximo permitido";
    $errores = 1;
}
if($errores == 0){
    $nombreCompleto = $directorioSubida . $nombreArchivo;
    move_uploaded_file($directorioTemp, $nombreCompleto);
    echo "Fichero subido correctamente";
}
}
?>
</body>
</html>


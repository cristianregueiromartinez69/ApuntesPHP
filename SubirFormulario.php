<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php

var_dump($_FILES); //información del fichero subido

$directorio = ini_get('upload_tmp_dir');
echo $directorio . "<br>";

$directorioTemp = $_FILES['imagen']['tmp_name'];
move_uploaded_file($directorioTemp,$_FILES['imagen']['name']);
?>
</body>
</html>


<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Recursividad. una funcion se llama a sí misma
 */
function factorial($n){
    if($n==1){
        return 1;
    }
    else{
        return $n * factorial($n-1);
    }
}
$resultado = factorial(5);
echo $resultado."<br>";
?>
</body>
</html>


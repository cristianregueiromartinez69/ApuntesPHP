<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * 2 tipos de sintaxis
 * 1. if(){
 *      }
 * 2. if():
 *    endif;
 */
$nota1 = 2;
$nota2 = 8;
$nota3 = 5;
$nota4 = 2;

if($nota1 < 5){
    echo "suspenso";
    echo "<br>";
}
if($nota2 > 5){
    echo "aprobado";
    echo "<br>";
}

if($nota3 >= 5){
    echo "Dentro de nota 3" . "<br>";
}
else if($nota4 > 2){
    echo "Dentro de nota 4" . "<br>";
}
else{
    echo "Pues no mi rey" . "<br>";
    }


/*
 * Operadores ternarios
 */
$notaT = 7;
$final = $notaT >= 5 ? "aprobado" : "suspenso" . "<br>";
echo $final;
?>
</body>
</html>


<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/**
 * bucle while
 */
$num = 10;
$respuesta = "Oporto";
$intentos = 1;
while($num >= 0){
    echo $num."<br>";
    $num--;
}

while($respuesta != "Lisboa"){
    echo "Intentos : ". $intentos."<br>";
    if($intentos == 3){
        $respuesta = "Lisboa";
    }
    $intentos++;
}

/*
 * bucle do-while
 */
echo "<br>";
$valor = 10;
do{
    echo "Dentro del do-while"."<br>";
    $valor--;
}while($valor > 0);
?>
</body>
</html>


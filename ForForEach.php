<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * For normal
 */
for($i = 1; $i <= 10; $i++){
    echo "Valor de i: " . $i . "<br>";
}
echo "<br>";
for($i = 10; $i >= 1; $i--){
    echo "Valor de i: " . $i . "<br>";
}
echo "<br>";
echo "Numeros pares" . "<br>";
for($i = 2; $i <= 100; $i+=2){
    echo "Valor de i: " . $i . "<br>";
}
echo "<br>";
/*
 * Combinarlo con if
 * Numeros pares
 */

for($i = 100; $i >= 1; $i--){
    if($i % 2 == 0){
        echo "Valor de i: " . $i . "<br>";
    }
}
echo "<br>";
/*
 * For each
 */
$datos = array("uno" => 1, "dos" => 2, "tres" => 3);
foreach($datos as $numero => $v){
    echo "Valor de " . $numero . ": " . $v . "<br>";
}

?>
</body>
</html>
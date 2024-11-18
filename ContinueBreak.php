<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * Ejemplo de break
 */
for($i = 0; $i < 10; $i++){
    echo "Valor de i: " . $i . "<br>";
    if($i == 5){
        break;
    }
}
//Break con argumento
for($i = 0; $i < 10; $i++){
    echo "Valor de i: " . $i . "<br>";
    for($j = 0; $j < 10; $j++){
        echo "Valor de j: " . $j . "<br>";
        if($j == 5){
            break 2; //con el 2 hacemos que salga de los 2
        }
    }
}
echo "<br>";
/*
 * Sentencia continue
 */
for($j = 0; $j < 10; $j++){
    if($j % 2 == 0){
        continue;
    }
    echo "Valor de j: " . $j . "<br>";
}

?>
</body>
</html>
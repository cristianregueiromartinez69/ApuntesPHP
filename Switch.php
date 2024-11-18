<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/*
 * estructura de control switch
 * switch(expresion){
 * casos
 * }
 */
//Con numeros
$dia = 10;
switch ($dia) {
    case 1:
        echo "Es lunes";
        break;
    case 2:
        echo "Es martes";
        break;
    case 3:
        echo "Es miercoles";
        break;
    case 4:
        echo "Es jueves";
        break;
    case 5:
        echo "Es viernes";
        break;
    case 6:
        echo "Es sabado";
        break;
    case 7:
        echo "Es domingo";
        break;
    default:
        echo "Es ninguno";
}
echo "<br>";
//con texto
$diaT = "martes";
switch ($diaT) {
    case "lunes":
        echo "Es lunes";
        break;
    case "martes":
        echo "Es martes";
        break;
    case "miercoles":
        echo "Es miercoles";
        break;
    case "jueves":
        echo "Es jueves";
        break;
    case "viernes":
        echo "Es viernes";
        break;
    case "sabado":
        echo "Es sabado";
        break;
    case "domingo":
        echo "Es domingo";
        break;
    default:
        echo "Es ninguno";
}

?>
</body>
</html>


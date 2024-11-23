<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hola mundo</title>
</head>
<body>
<?php
/**
 * Cookies propias
 */
setcookie("noExpira",1);//no expira
setcookie("miCookie",2,time()+10); //expira en 10 segundos

var_dump($_COOKIE); //vemos nuestras cookies

setcookie("idioma","esp");
/*
 * Define una cookie idioma
 * comprueba si se ha definido una cookie idioma y además es en español
 */
if(isset($_COOKIE["idioma"]) && $_COOKIE["idioma"]=="esp"){
    echo "se ha definido una cookie con el idioma en español";
}

/*
 * Eliminar una cookie
 */
setcookie("idioma","",time()-1); //definimos la cookie con un tiempo en pasado
var_dump($_COOKIE);
?>
</body>
</html>


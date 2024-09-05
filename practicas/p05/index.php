<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<TITLE> PRACTICA 5 PHP </TITLE>
<body>
<?php
    echo '$_myvar es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br>' ;
    echo '$_7var es una variable aceptable porque estas pueden comenzar con un signo de o un <br>';
    echo 'myvar no es una variable porque no empieza por signo de dolar o guión bajo <br>';
    echo '$myvar es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br>' ;
    echo '$var7es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br>' ;
    echo '$_element1es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br>' ;
    echo '$house*5 no es una variable por el * <br>';

    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";

    $a = "PHP server";
    $b = &$a;
    echo "<br>";
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";

    echo "<br>";
    echo "Después del segundo bloque de asignaciones, todas las variables ($a, $b, y $c) tendrán el valor PHP server, porque $b y $c están referenciadas a $a."
?>
</body>


</html>

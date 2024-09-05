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
    echo "Después del segundo bloque de asignaciones, todas las variables ($a, $b, y $c) tendrán el valor PHP server, porque $b y $c están referenciadas a $a.";
    
    echo "<br>";
    echo "<br>";


    $a = "PHP5";
    echo "\$a = $a<br>";  // PHP5

    $z[] = &$a;
    print_r($z);

    $b = "5a version de PHP";
    echo "<br>\$b = $b<br>";  // 5a version de PHP

    //$c = $b * 10;
    //echo "\$c = $c<br>";  // 0

    $a .= $b;
    echo "\$a = $a<br>";  // PHP55a version de PHP
    
    //$b *= $c;
    //echo "\$b = $b<br>";  // 0

    $z[0] = "MySQL";
    echo "\$z[0] = $z[0]<br>";  // MySQL    
    
    
    echo "<br>";
    function test() {
        echo "Valores usando \$GLOBALS:<br>";
        echo "a = " . $GLOBALS['a'] . "<br>";
        echo "b = " . $GLOBALS['b'] . "<br>";
        echo "c = " . $GLOBALS['c'] . "<br>";
        echo "z = ";
        print_r($GLOBALS['z']);
        echo "<br><br>";
    }
    test();

    $a = "7 personas";
    echo "Se asigna la cadena '7 personas' a la variable \$a.<br>";
    $b = (integer) $a;
    echo "La cadena se convierte a un entero, es decir, el valor numérico inicial es 7, y se descarta la parte no numérica (personas).<br>";
    $a = "9E3";
    echo "Ahora, la variable \$a recibe el valor de la cadena 9E3. En notación científica, esto representa el número 9000<br>";
    $c = (double) $a;
    echo "La cadena 9E3 se convierte a un número en punto flotante (double). En este caso, la conversión produce el valor numérico 9000.0<br>";

    echo "<br>";
    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    // Mostrar los valores con var_dump
    var_dump($a); // string(1) "0"
    echo "<br>";
    var_dump($b); // string(4) "TRUE"
    echo "<br>";
    var_dump($c); // bool(false)
    echo "<br>";
    var_dump($d); // bool(true)
    echo "<br>";
    var_dump($e); // bool(false)
    echo "<br>";
    var_dump($f); // bool(true)
    echo "<br>";

    // Función para convertir booleano a cadena
    echo "Booleano de \$c: " . ($c ? 'true' : 'false') . "<br>";  // false
    echo "Booleano de \$e: " . ($e ? 'true' : 'false') . "<br>";  // false


?>
</body>


</html>

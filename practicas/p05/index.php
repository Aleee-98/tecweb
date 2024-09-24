<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> PRACTICA 5 PHP </title>
</head>
<body>
<?php
    echo "-----PARTE 1-----<br />";
    echo "$_myvar es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br />" ;
    echo '$_7var es una variable aceptable porque estas pueden comenzar con un signo de o un <br />';
    echo 'myvar no es una variable porque no empieza por signo de dolar o guión bajo <br />';
    echo '$_7var es una variable aceptable porque estas pueden comenzar con un signo de pesos o un número <br />';
    echo '$var7 es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br />' ;
    echo '$_element1 es una variable aceptable porque estas pueden comenzar con un signo de pesos o guión bajo <br />' ;
    echo '$house*5 no es una variable por el * <br />';

    echo "-----PARTE 2-----<br />";
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    echo "a = $a<br />";
    echo "b = $b<br />";
    echo "c = $c<br />";

    $a = "PHP server";
    $b = &$a;
    echo "<br />";
    echo "a = $a<br />";
    echo "b = $b<br />";
    echo "c = $c<br />";
    echo "Después del segundo bloque de asignaciones, todas las variables ($a, $b, y $c) tendrán el valor PHP server, porque $b y $c están referenciadas a $a.";
    
    echo "<br />";
    
    echo "-----PARTE 3-----<br />";
    $a = "PHP5";
    echo "\$a = $a<br />";  // PHP5

    $z[] = &$a;
    print_r($z);

    $b = "5a version de PHP";
    echo "<br />\$b = $b<br />";  // 5a version de PHP

    //$c = $b * 10;
    //echo "\$c = $c<br />";  // 0

    $a .= $b;
    echo "\$a = $a<br />";  // PHP55a version de PHP
    
    //$b *= $c;
    //echo "\$b = $b<br />";  // 0

    $z[0] = "MySQL";
    echo "\$z[0] = $z[0]<br />";  // MySQL    
    
    echo "-----PARTE 4-----<br />";
    function test() {
        echo "Valores usando \$GLOBALS:<br />";
        echo "a = " . $GLOBALS['a'] . "<br />";
        echo "b = " . $GLOBALS['b'] . "<br />";
        echo "c = " . $GLOBALS['c'] . "<br />";
        echo "z = ";
        print_r($GLOBALS['z']);
        echo "<br /><br />";
    }
    test();
    echo "-----PARTE 5-----<br />";
    $a = "7 personas";
    echo "Se asigna la cadena $a a la variable \$a.<br />";
    $b = (integer) $a;
    echo "La cadena se convierte a un entero, es decir, el valor numérico inicial es $b, y se descarta la parte no numérica (personas).<br />";
    $a = "9E3";
    echo "Ahora, la variable \$a recibe el valor de la cadena 9E3. En notación científica, esto representa el número $a<br />";
    $c = (double) $a;
    echo "La cadena 9E3 se convierte a un número en punto flotante (double). En este caso, la conversión produce el valor numérico $c<br />";

    echo "-----PARTE 6-----<br />";
    $a = "0";
    var_dump($a); 
    echo "<br />";
    $b = "TRUE";
    var_dump($b); 
    echo "<br />";
    $c = FALSE;
    var_dump($c); 
    echo "<br />";
    $d = ($a OR $b);
    var_dump($d); 
    echo "<br />";
    $e = ($a AND $c);
    var_dump($e); 
    echo "<br />";    
    $f = ($a XOR $b);
    var_dump($f); 
    echo "<br />";

    echo "Booleano de \$c: " . ($c ? 'true' : 'false') . "<br />";  // false
    echo "Booleano de \$e: " . ($e ? 'true' : 'false') . "<br />";  // false

    echo "-----PARTE 7-----<br />";
    // a. La versión de Apache y PHP
    echo "Versión de PHP: " . phpversion() . "<br />";
    echo "Versión de Apache: " . $_SERVER['SERVER_SOFTWARE'] . "<br />";
    // b. El nombre del sistema operativo (servidor)
    echo "Sistema Operativo del Servidor (deducido del SERVER_SOFTWARE): " . $_SERVER['SERVER_SOFTWARE'] . "<br />";
    // c. El idioma del navegador (cliente)
    echo "Idioma del Navegador (Accept-Language): " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br />";    
?>
 <p>
    <a href="https://validator.w3.org/markup/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" />

  </p>
</body>


</html>

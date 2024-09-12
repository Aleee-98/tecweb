<?php
function Multiplo5_7($num) {
    if ($num % 5 == 0 && $num % 7 == 0) {
        return 'El número ' . $num . ' SÍ es múltiplo de 5 y 7.';
    } else {
        return 'El número ' . $num . ' NO es múltiplo de 5 y 7.';
    }
}

function generarSecuencia() {
    $matriz = [];
    $i = 0; 
    $numeros = 0; 

    do {        
        $n1 = rand(1, 100);
        $n2 = rand(1, 100);
        $n3 = rand(1, 100);
        
        $matriz[] = [$n1, $n2, $n3];
       
        $i++;
        $numeros+= 3;
        
        $condicion = ($n1 % 2 != 0 && $n2 % 2 == 0 && $n3 % 2 != 0);
    } while (!$condicion);
    
    /*echo "Secuencia encontrada en $i iteraciones:\n";
    foreach ($matriz as $fila) {
        echo implode(', ', $fila) . "\n";
    }*/
    
    return "$i números obtenidos en $numeros iteraciones";    
}

function entero($numeroDado){    
    if (filter_var($numeroDado, FILTER_VALIDATE_INT) && $numeroDado > 0) {
        $encontrado = false;
        $contador = 0;

        while (!$encontrado) {
            $numeroAleatorio = rand(1, 100); // Generar un número aleatorio entre 1 y 100
            $contador++;                

            if ($numeroAleatorio % $numeroDado == 0) {
                $encontrado = true;
                return "Número múltiplo de $numeroDado encontrado: $numeroAleatorio después de $contador intentos.<br>";
            }
        }
    } else {
        return "Por favor, proporciona un número entero mayor que 0.";
    }
}

    


function enterDo_while($numeroDado){        
        if ($numeroDado > 0) {
            $contador = 0;
            do {
                $numeroAleatorio = rand(1, 100); // Generar un número aleatorio entre 1 y 100
                $contador++;                
            } while ($numeroAleatorio % $numeroDado != 0);

            return "Número múltiplo de $numeroDado encontrado: $numeroAleatorio después de $contador intentos.<br>";
        } else {
            return "Por favor, proporciona un número mayor que 0.";
        }
    } 


    function ascii() {
        // Crear el arreglo con los valores ASCII de 'a' a 'z'
        $arreglo = [];
        for ($i = 97; $i <= 122; $i++) {
            $arreglo[$i] = chr($i);
        }
    
        // Crear la tabla en XHTML usando echo
        echo '<table border="1">';
        echo '<tr><th>ASCII</th><th>Caracter</th></tr>';
    
        // Recorrer el arreglo con foreach para crear las filas de la tabla
        foreach ($arreglo as $key => $value) {
            echo '<tr>';
            echo '<td>' . $key . '</td>';   // Imprimir el valor ASCII
            echo '<td>' . $value . '</td>'; // Imprimir el carácter correspondiente
            echo '</tr>';
        }
    
        echo '</table>';
    }
?>
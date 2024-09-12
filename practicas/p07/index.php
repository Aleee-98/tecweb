<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
</head>
<body>

    <!-- Formulario para ingresar un número -->
    <form method="GET" action="index.php">
        
        <fieldset>
            <legend>Múltiplo de 5 y 7</legend>
            <!-- Input para el número -->
            <label for="numero1">Ingrese un número:</label>
            <input type="text" name="numero1" id="numero1">
            <button type="submit">Comprobar</button>    

        <!-- PHP para mostrar el resultado -->
        <?php
            // Incluir el archivo de funciones desde la subcarpeta src
            include_once 'src/funciones.php';

            // Verificar si el número fue enviado por GET
            if(isset($_GET['numero1']) && is_numeric($_GET['numero1']))
            {
                $num = $_GET['numero1'];
                // Llamar a la función Multiplo5_7 desde el archivo src/funciones.php
                $resultado1 = Multiplo5_7($num);
                echo '<h3>R= ' . $resultado1 . '</h3>';
            }
            else if (isset($_GET['numero1'])) {
                echo '<h3>Por favor, ingrese un número válido.</h3>';
            }
        ?>
        </fieldset>
        
        <fieldset>
            <legend>Secuencia impar par impar</legend>
            <?php
                include_once 'src/funciones.php';
                $resultado2 = generarSecuencia();
                echo '<h3>R= ' . $resultado2 . '</h3>';
            ?>    
        </fieldset>

        <fieldset>
            <legend>Numero aleatorio y multiplo</legend>
                <h3>Ciclo_while</h3>
                <label for="numero3">Ingrese un número:</label>
                <input type="text" name="numero3" id="numero3">
                <button type="submit">Comprobar</button>

                <?php
                    include_once 'src/funciones.php';                

                    if(isset($_GET['numero3']) && is_numeric($_GET['numero3'])){
                        $num = $_GET['numero3'];
                        // Llamar a la función Multiplo5_7 desde el archivo src/funciones.php
                        $resultado3 = entero($num);
                        echo '<h3>R= ' . $resultado3 . '</h3>';
                    }
                    else if (isset($_GET['numero3'])) {
                        echo '<h3>Por favor, ingrese un número válido.</h3>';
                    }    
                ?>

                <h3>Ciclo_DoWhile</h3>
                <label for="numero4">Ingrese un número:</label>
                <input type="text" name="numero4" id="numero4">
                <button type="submit">Comprobar</button>

                <?php
                    include_once 'src/funciones.php';                

                    if(isset($_GET['numero4']) && is_numeric($_GET['numero4'])){
                        $num = $_GET['numero4'];
                        // Llamar a la función Multiplo5_7 desde el archivo src/funciones.php
                        $resultado4 = enterDo_while($num);
                        echo '<h3>R= ' . $resultado4 . '</h3>';
                    }
                    else if (isset($_GET['numero4'])) {
                        echo '<h3>Por favor, ingrese un número válido.</h3>';
                    }    
                ?>
        </fieldset>

        <fieldset>
            <legend>Tabla de ASCII</legend>

            <?php
                include_once 'src/funciones.php';
                ascii();
            ?>


        </fieldset>
    </form>


</body>
</html>

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
            <legend>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</legend>
            <!-- Input para el número -->
            <label for="numero">Ingrese un número:</label>
            <input type="text" name="numero" id="numero">
            <button type="submit">Comprobar</button>    

        <!-- PHP para mostrar el resultado -->
        <?php
            // Incluir el archivo de funciones desde la subcarpeta src
            include_once 'src/funciones.php';

            // Verificar si el número fue enviado por GET
            if(isset($_GET['numero']) && is_numeric($_GET['numero']))
            {
                $num = $_GET['numero'];
                // Llamar a la función Multiplo5_7 desde el archivo src/funciones.php
                $resultado1 = Multiplo5_7($num);
                echo '<h3>R= ' . $resultado1 . '</h3>';
            }
            else if (isset($_GET['numero'])) {
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
                <label for="numero">Ingrese un número:</label>
                <input type="text" name="numero" id="numero">
                <button type="submit">Comprobar</button>

                <?php
                    include_once 'src/funciones.php';

                    if(isset($_GET['numero']) && is_numeric($_GET['numero'])){
                        $num = $_GET['numero'];
                        // Llamar a la función Multiplo5_7 desde el archivo src/funciones.php
                        $resultado3 = entero($num);
                        echo '<h3>R= ' . $resultado3 . '</h3>';
                    }
                    else if (isset($_GET['numero'])) {
                        echo '<h3>Por favor, ingrese un número válido.</h3>';
                    }    
                ?>

        </fieldset>

    </form>


</body>
</html>

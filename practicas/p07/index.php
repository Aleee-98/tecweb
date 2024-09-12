<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Práctica 7</title>
    <style type="text/css">
        ol, ul { 
            list-style-type: none;
        }
        
        body {
            background-color: #66bce9;
            margin: 5%;
            font-family: 'Times New Roman', Times, serif;
        }

        h1 {
            text-align: center;
            font-family: Helvetica;
            font-weight: normal;
            text-transform: uppercase;
            color: #e8edef;
            border-bottom: 1px solid #43bff0;
            margin-top: 30px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333333;
        }

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            background-color: #43bff0;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3399cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #43bff0;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h2, h3, h4 {
            color: #333333;
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        fieldset {
            border: 2px solid #43bff0;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            color: #43bff0;
        }
    </style>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer05MuestraVariablesServidor</title>
    <link rel="stylesheet" href="./ejer05MuestraVariablesServidor.css">
</head>
<body>
    <header>
        <h3>Ejercicio 05 Muestra Variables del Servidor</h3>
    </header>
    <div class="contenido">
        <?php
            echo "<h3>Variables del Servidor:</h3>"; echo "<br>";
            //Tabla Server 
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 30%; height: 100px; text-align: center;'>";
                foreach ($_SERVER as $key_name => $key_value) {
                    echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                    if ($key_name == 'SERVER_ADDR' || $key_name == 'SERVER_PORT' || $key_name == 'SERVER_NAME' || $key_name == 'DOCUMENT_ROOT') {
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_name</td>";
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_value</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";echo "<br>";echo "<hr>";echo "<br>";

            echo "<h3>Variables del Cliente:</h3>"; echo "<br>";
            //Tabla Remote 
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 20%; height: 80px; text-align: center;'>";
                foreach ($_SERVER as $key_name => $key_value) {
                    echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                    if ($key_name == 'REMOTE_ADDR' || $key_name == 'REMOTE_PORT') {
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_name</td>";
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_value</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";echo "<br>";echo "<hr>";echo "<br>";

            echo "<h3>Variables de Requerimiento:</h3>"; echo "<br>";
            //Tabla Remote 
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 30%; height: 80px; text-align: center;'>";
                foreach ($_SERVER as $key_name => $key_value) {
                    echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                    if ($key_name == 'SCRIPT_NAME' || $key_name == 'REQUEST_METHOD') {
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_name</td>";
                        echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_value</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";echo "<br>";echo "<hr>";echo "<br>";

            echo "<h3>Barrido de todas las variables del Servidor:</h3>"; echo "<br>";
            //Tabla Remote 
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 30%; height: 80px; text-align: center;'>";
                foreach ($_SERVER as $key_name => $key_value) {
                    echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                    echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_name</td>";
                    echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$key_value</td>";
                    echo "</tr>";
                }
            echo "</table>";echo "<br>";echo "<br>";

        ?>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>
</body>
</html>
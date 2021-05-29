<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer02include</title>
    <link rel="stylesheet" href="./ejer02include.css">
</head>
<body>
    <header>
        <h3>Ejercicio 02 Include</h3>
    </header>
    <div class="contenido">
    <?php
            echo "<br>";
            echo "<h3>En este ejemplo se utiliza la funcion include():</h3>"; echo "<br>";
            
            echo "<h3>Aqui ya se ejecuto la funcion include():</h3>"; echo "<br>";
            echo "<h3>Las dos variables de array de tipo asociativo son:</h3>"; echo "<br>";
            include("./ejer02include.inc");
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 30%; height: 100px; text-align: center;'>";
            for ($i=0; $i < count($arregloPersonas); $i++) { 
                echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                foreach ($arregloPersonas[$i] as $varDatos) {
                    echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$varDatos</td>";
                }
                echo "</tr>";
            }
            echo "</table>";echo "<br>";
            echo "<span style='font-size:16px;'>La longitud del arreglo es de: </span>" . count($persona1) ;
            echo "<br>";echo "<br>";
        ?><hr>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>
</body>
</html>
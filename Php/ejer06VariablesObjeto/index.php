<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer06VariablesObjeto</title>
    <link rel="stylesheet" href="./ejer06VariablesObjeto.css">
</head>
<body>
    <header>
        <h3>Ejercicio 06 Variables Objeto</h3>
    </header>
    <div class="contenido">
        <?php
             echo "<br>";echo "<h3>Variables Objeto en PHP: Objeto Articulo</h3>"; echo "<br>";echo "<hr>";echo "<br>";

            $objArticulo = new stdClass;
            $objArticulo->codigo="zapa001";
            $objArticulo->nombre="nike airmax";
            $objArticulo->precio=2000;
            $objArticulo->stock=21;

            echo "<h3 style='color: blue;'>Objeto \$objArticulo</h3>"; echo "<br>";

            foreach ($objArticulo as $key_name => $key_value) {
                echo "<span style='font-size: 16px'> $key_name: </span>" . $key_value;
                echo "<br>";
            }
            echo "<br>";echo "<hr>";echo "<br>";

            echo "<span style='font-size: 16px'> Tipo de \$objArticulo: </span>" .gettype($objArticulo);
            echo "<br>";echo "<br>";echo "<hr>";echo "<br>";

            echo "<h3>Definamos Arreglos de Articulos</h3>"; echo "<br>";echo "<hr>";echo "<br>";

            $objArticulos=[];
            array_push($objArticulos,$objArticulo);

            $objArticulo2 = new stdClass;
            $objArticulo2->codigo="jean003";
            $objArticulo2->nombre="Jean tiro alto";
            $objArticulo2->precio=1200;
            $objArticulo2->stock=11;

            $objArticulo3 = new stdClass;
            $objArticulo3->codigo="rem002";
            $objArticulo3->nombre="Remera Corta";
            $objArticulo3->precio=900;
            $objArticulo3->stock=33;

            array_push($objArticulos,$objArticulo2);
            array_push($objArticulos,$objArticulo3);

            echo "<h3 style='color: blue;'>Objeto \$objArticulos</h3>"; echo "<br>";

            $cont=0;
            foreach ($objArticulos as $objArticulo) {
                echo "<span style='font-size: 16px;'> $objArticulo->codigo </span>";
                echo "<span style='margin-left: 30px;'></span>";
                echo "<span style='font-size: 16px;'> $objArticulo->nombre </span>";
                echo "<span style='margin-left: 40px;'></span>";
                echo "<span style='font-size: 16px;'> $objArticulo->precio </span>";
                echo "<span style='margin-left: 50px;'></span>";
                echo "<span style='font-size: 16px;'> $objArticulo->stock </span>";
                echo "<span style='margin-left: 50px;'></span>";
                echo "<br>";
                $cont++;
            }
            echo "<br>";

            echo "<span style='font-size: 16px'> Cantidad de Renglones: </span>" . $cont;
            echo "<br>";echo "<br>";echo "<hr>";echo "<br>";

            $objArticulosNuevo = new stdClass();
            $objArticulosNuevo->objArticulos=$objArticulos;
            $objArticulosNuevo->cantArticulos=count($objArticulos);

            echo "<h3>Produccion de un objeto <span style='font-size: 16px; color: blue;'>\$objArticulosNuevo</span> con dos atributos de array: Articulos y Cant de Articulos: </h3>"; echo "<br>";

            echo "<span style='font-size: 16px'> Cantidad de Acticulos: </span>" . $objArticulosNuevo->cantArticulos;
            echo "<br>";echo "<br>";echo "<hr>";echo "<br>";

            echo "<h3>Produccion de un JSON: jsonArticulos: </h3>"; echo "<br>";

            $jsonArticulos=json_encode($objArticulosNuevo);
            echo "<span style='font-size: 16px'>$jsonArticulos</span>";
            echo "<br>";echo "<br>";
        ?>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer01Base</title>
    <link rel="stylesheet" href="./ejer01Base.css">
</head>
<body>
    <header>
        <h3>Ejercicio 01 Base</h3>
    </header>
    <div class="contenido">
        <br><h3>Todo lo que escribo en esta linea fue realizado fuera de las marcas de php</h3><br><hr><br>
        <?php echo "<h3>El texto que estoy escribiendo en esta linea <span style='color: darkblue;'>esta siendo entregado por php</span> por medio de echo</h3>";echo "<br>"; ?><hr><br>
        <?php
            $variableBase="valor1"; 
            echo "<h3>Sin usar concatenador <span style='color: darkblue;'>\$variableBase: </span> $variableBase </h3>";
        ?><br> 
        <?php
            $variableBase="valor1"; 
            echo "<span style='font-size:16px;'>Usando concatenador </span><span style='color: darkblue;font-size:16px;'>\$variableBase: </span>" . $variableBase;echo "<br>";
        ?><br><hr><br>
        <?php
            $varBool=true; 
            echo "<h3>Variable tipo booleana (Verdadero) <span style='color: darkblue;'>\$varBool</span> : $varBool </h3>";
        ?><br>
        <?php
            $varBool=false; 
            echo "<h3>Variable tipo booleana (Falso) <span style='color: darkblue;'>\$varBool</span> : $varBool </h3>";
        ?><br><hr><br>
        <?php
            define("CONSTANTE","valorConstante");
            echo "<span style='color: darkblue;font-size:16px;'> CONSTANTE: </span>" . CONSTANTE ;
            echo "<br>"
        ?><br>
        <?php
            echo "<span style='font-size:16px;'>Tipo de <span style='color: darkblue;font-size:16px;'> CONSTANTE: </span></span>" . gettype(CONSTANTE) ;echo "<br>";
        ?><br><hr><br>
        <?php
            echo "<h3>Arreglos:</h3>"; echo "<br>";
            $arregloGracias=["Gracias","Grazie"];
            $cont=0;
            foreach ($arregloGracias as $varArregloGracias) {
                echo "<span style='color: darkblue; font-size: 16px'> \$arregloGracias[$cont]: </span>" . $varArregloGracias;
                echo "<br>";
                $cont++;
            }
            echo "<br>";
            echo "<span style='font-size:16px;'>Tipo de <span style='color: darkblue;font-size:16px;'>\$arregloGracias: </span></span>" . gettype($arregloGracias) ; 
            echo "<br>";echo "<br>";
            array_push($arregloGracias,"Thank You");
            array_push($arregloGracias,"Merci");
            array_push($arregloGracias,"Danke");
            echo "<h3>Se agrega por programa 3 elementos nuevos</h3>"; echo "<br>";
            echo "<h3>Todos los elementos originales y agregados:</h3>"; echo "<br>";
            foreach ($arregloGracias as $varArregloGracias) {
                echo "<li>$varArregloGracias</li>";
            }
            echo "<br>";
            echo "<h3>Arreglo de dos dimensiones (diccionario): </h3>"; echo "<br>";
            $arregloAdios=["Adios","Addio","Bye","Adieu","Tschuss"];
            $arregloHola=["Hola","Ciao","Hello","Salut","Hallo"];
            $diccionario=[];
            array_push($diccionario,$arregloGracias);
            array_push($diccionario,$arregloAdios);
            array_push($diccionario,$arregloHola);
            echo "<span style='font-size:16px;'>Tipo de <span style='color: darkblue;font-size:16px;'>\$diccionario: </span></span>" . gettype($diccionario) ; echo "<br>";
            echo "<br>";
            echo "<span style='padding-left: 20px;'>Español</span><span style='padding-left: 20px;'>Italiano</span><span style='padding-left: 35px;'>Ingles</span><span style='padding-left: 50px;'>Frances</span><span style='padding-left: 30px;'>Aleman</span>";
            echo "<table style='background-color: lightblue; border: solid 2px black; border-collapse: collapse; width: 30%; height: 100px; text-align: center;'>";
            for ($i=0; $i < count($diccionario); $i++) { 
                echo "<tr style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>";
                foreach ($diccionario[$i] as $varDiccionario) {
                    echo "<td style='background-color: lightblue; border: solid 2px black; border-collapse: collapse;'>$varDiccionario</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<span style='font-size:16px;'>Tambien asi se puede expresar es valor de \$diccionario[1][3]: </span>" . $diccionario[1][3] ;
            echo "<br>"; echo "<br>";
            echo "<span style='font-size:16px;'>Cantidad de elementos en el diccionario: </span>" . count($diccionario) ;
            echo "<br>";echo "<br>";
        ?><hr>
        <?php
            echo "<br>";
            echo "<h3>Variables de tipo Arreglo Asociativo: </h3>"; echo "<br>";
            $listadoProductos=["cod"=>"zap01","nombre"=>"zapatillas","precio"=>"2000","cant"=>"10"];
            echo "<span style='font-size:16px;'>Codigo: </span>" . $listadoProductos['cod']; echo "<br>";
            echo "<span style='font-size:16px;'>Nombre: </span>" . $listadoProductos['nombre']; echo "<br>";
            echo "<span style='font-size:16px;'>Precio: </span>" . $listadoProductos['precio']; echo "<br>";
            echo "<span style='font-size:16px;'>Cantidad: </span>" . $listadoProductos['cant']; echo "<br>";echo "<br>";
            echo "<span style='font-size:16px;'>Cantidad de elementos del listado: </span>" . count($listadoProductos) ; echo "<br>";
            echo "<span style='font-size:16px;'>Tipo de dato: </span>" . gettype($listadoProductos) ; echo "<br>";echo "<br>";
        ?><hr>
        <?php
            echo "<br>";
            $x=6;
            $y=10;
            $suma=($x+$y);
            $multi=($x*$y);
            $div=($x/$y);
            echo "<span style='font-size:16px;'>La variable \$x tiene el siguiente valor: </span>" . $x ; echo "<br>";
            echo "<span style='font-size:16px;'>La variable \$y tiene el siguiente valor: </span>" . $y ; echo "<br>";
            echo "<span style='font-size:16px;'>La variable \$x tiene el siguiente tipo: </span>" . gettype($x) ; echo "<br>";
            echo "<span style='font-size:16px;'>La variable \$y tiene el siguiente tipo: </span>" . gettype($y) ; echo "<br>";
            echo "<span style='font-size:16px;'>Asi se imprime una operacion aritmetica (ej. SUMA): (\$x + \$y)= </span>" . $suma ; echo "<br>";
            echo "<span style='font-size:16px;'>Asi se imprime una operacion aritmetica (ej. MULTIPLICACION): (\$x * \$y)= </span>" . $multi ; echo "<br>";
            echo "<span style='font-size:16px;'>Asi se imprime una operacion aritmetica (ej. DIVISION): (\$x / \$y)= </span>" . $div ; echo "<br>";
            echo "<br>";
            echo "<br>";
        ?>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer17Ajax</title>
    <link rel="stylesheet" href="./ejer17Ajax.css">
</head>
<body>
    <header>
        <h3>Ejercicio 17 Ajax:</h3>
    </header>
    <div class="contenido">
        <div id="div1">
            <h1>HOLA</h1>
        </div>
        <div id="div2">
            <h1>HOLA</h1>
        </div>
        <div id="div3">
            <h1>HOLA</h1>
        </div>
        <div id="div4">
            <h1>HOLA</h1>
        </div>
        <div id="div5">
            <h1>HOLA</h1>
        </div>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#envio").click(function(){
            $("#form").submit();
        })
    </script>

<?php  
        if (isset($_POST['clave'])) {
            $clave = $_POST["clave"];
            $cencriptadamd5 = md5($clave);
            $cencriptadasha1 = sha1($clave);

            echo "<h3 style='margin-left: 50px; margin-top: 50px;'>Clave: $clave </h3>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave encriptada en md5 (128 bits o 16 pares de Hexadecimales): $cencriptadamd5</h3>";echo"<br>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave: $clave</h3>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave encriptada en sha1 (160 bits o 20 pares de Hexadecimales): $cencriptadasha1</h3>";echo"<br>";echo"<br>";

        }else{
            echo"<br><form method='POST' id='form'>";
            echo"<label>Ingrese la clave a encriptacion:</label>"; echo"<br>";
            echo"<input type='text' name='clave' id='clave' required>"; echo"<br>"; echo"<br>";
            echo"<input type='submit' value='Obtener Encriptacion' id='envio'>";
            echo"</form>";
        }
    ?> 
</body>
</html>
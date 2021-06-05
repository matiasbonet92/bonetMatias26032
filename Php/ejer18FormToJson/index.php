<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer18FormToJson</title>
    <link rel="stylesheet" href="./ejer18FormToJson.css">
</head>
<body>
    <div id="contenedor">
        <header>
            <h3>Ejercicio 18 Form To Json:</h3>
        </header>
        <div class="contenido">
            <button id="btnModal">Apertura de Div Modal</button>
        </div>
        <footer>
            <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
            <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
        </footer>
    </div>

    <div id="modal">
        <div class="cabecera">
            <header>Formulario</header>
            <button id="cerrar">X</button>
        </div>
        <div class="formulario">
                <div class="formInternos">
                    <label for="id">ID usuario:</label><br>
                    <input type="text" name="id" id="id" required>
                </div>
                <div class="formInternos">
                    <label for="login">Login:</label><br>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="formInternos">
                    <label for="apellido">Apellido:</label><br>
                    <input type="text" name="apellido" id="apellido" required>
                </div>
                <div class="formInternos">
                    <label for="nombres">Nombres:</label><br>
                    <input type="text" name="nombres" id="nombres" required>
                </div>
                <div class="formInternos">
                    <label for="nac">Edad:</label><br>
                    <input type="date" name="fnac" id="nacimiento" required>
                </div>
                <div class="formInternos">
                    <input type="submit" name="" id="enviar" value="Enviar">
                </div>
                <div id="respuesta"></div>
        </div>    
        <footer>Pie del formulario</footer>
    </div>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./ejer18FormToJson.js"></script>
</body>
</html>
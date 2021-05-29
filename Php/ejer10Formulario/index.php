<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer10Formulario</title>
    <link rel="stylesheet" href="./ejer10Formulario.css">
</head>
<body>
    <header>
        <h3>Ejercicio 10 Formulario:</h3>
    </header>
    <div class="contenido">
        <br><form action="./Respuesta.php" method="POST" id="form">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required><br><br>
            <input type="submit" value="Envio de la informacion" id="envio">
        </form>
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
</body>
</html>
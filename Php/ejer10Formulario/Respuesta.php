<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer10RespuestaFormulario</title>
    <link rel="stylesheet" href="./ejer10Formulario.css">
</head>
<body>
    <header>
        <h3>Ejercicio 10 Respuesta al Formulario:</h3>
    </header>
    <div class="contenido">
        <br><?php 
            echo "<h3>Valores pasados:</h3>"; echo "<br>";
            echo "<span style='font-size:16px; color:blue;'> Nombre: </span>" . $_POST['nombre'] ; 
            echo "<br>";
            echo "<span style='font-size:16px; color: blue;'> Apellido: </span>" . $_POST['apellido']; 
            echo "<br>";
        ?><br>
        <input type="submit" value="Cerrar" id="cerrar">
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#cerrar").click(function(){
            location.href="./index.php"
        })
    </script>
</body>
</html>
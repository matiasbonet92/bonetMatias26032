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
            <h2>Dato de Entrada:</h2>
            <input type="text" name="frase" id="frase" required>
        </div>
        <div id="div2">
            <h2>Encriptar:</h2>
            <input type="image" src="C:\Users\Mbonet\Desktop\flecha-derecha.svg" alt="" id="envio">
        </div>
        <div id="div3">
            <h3>Resultado:</h3>
        </div>
        <div id="div4">
            <h3>Estado del Requerimiento:</h3>
        </div>
        <div id="div5">
        </div>
    </div>
    <footer>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.php">Volver al Inicio</a>
    </footer>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#envio").click(function(){
            $("div3").empty();
            $("div3").addClass("estiloRecibiendo");
            $("div3").html("<h2>Esperando Respuesta ...</h2>");
            $("div4").empty();
            $("div4").append("<h2>Estado del Requerimiento</h2>");

            $.ajax({
                type:"post",
                url:"./respuesta.php",
                data: {frase: $("frase").val()},
                success: function(respuestaDelServer,estado) {
                    $("#div3").removeClass("estiloRecibiendo");
                    $("#div3").html("<h1>Resultado: </h1><h4>" + respuestaDelServer + "</h4>"); 
                    $("#div4").append("<h4>" + estado + "</h4>");
                }
            });
        })
    </script>
</body>
</html>
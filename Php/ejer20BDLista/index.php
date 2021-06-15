<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php20BDLista</title>
    <link rel="stylesheet" href="./ejer20BDLista.css">
</head>
<body>
    <div class="cabeceraTabla">
        <header>Tabla de datos de Jugadores</header>
        <label for="orden">Orden:</label><br>
        <input type="text" readonly id="input">
        <button id="cargarDatos">Cargar Datos</button>
        <button id="vaciar">Vaciar Datos</button>
    </div>
    <table id="tabla">
        <thead>
            <tr>
                <th campo-dato="codjug">Codigo Jugador</th>
                <th campo-dato="nombre">Nombre</th>
                <th campo-dato="fecha_nacimiento">Fecha de Nacimiento</th>
                <th campo-dato="equipo">Equipo</th>
                <th campo-dato="activo">Activo</th>
                <th campo-dato="edad">Edad</th>
            </tr>
        </thead>
        <tbody id="cuerpoTabla"></tbody>
    </table>
    <footer class="pieTabla">
        <div id="registros"></div>
        Pie de Pagina
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="../index.html">Volver Atras</a>
        <a style="text-align: center; color:white; border: black; border-style: solid; border-width: medium; background-color: blue; text-decoration: none;" href="/index.php">Volver al Inicio</a>
    </footer>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./ejer20BDLista.js" type="text/javascript"></script>
</body>
</html>
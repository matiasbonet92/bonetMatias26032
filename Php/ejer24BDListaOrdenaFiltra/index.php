<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php24BDListaOrdenaFiltra</title>
    <link rel="stylesheet" href="./ejer24BDListaOrdenaFiltra.css">
</head>
<body>
    <div class="cabeceraTabla">
        <header>Tabla de datos de Jugadores</header>
        <label for="orden">Orden:</label><br>
        <input type="text" readonly id="orden">
        <button id="cargarDatos">Cargar Datos</button>
        <button id="vaciar">Vaciar Datos</button>
    </div>
    <table id="tabla">
        <thead>
            <tr>
                <th campo-dato="codjug" id="codjug">Codigo Jugador</th>
                <th campo-dato="nombre" id="nombre">Nombre</th>
                <th campo-dato="fecha_nacimiento" id="fnac">Fecha de Nacimiento</th>
                <th campo-dato="equipo" id="equipo">Equipo</th>
                <th campo-dato="activo" id="activo">Activo</th>
                <th campo-dato="edad" id="edad">Edad</th>
            </tr>
            <tr>
                <th campo-dato="codjug">
                    <input type="text" id="inputCodJug">
                </th>
                <th campo-dato="nombre">
                    <input type="text" id="inputNombre">
                </th>
                <th campo-dato="fecha_nacimiento">
                    <input type="text" id="inputFNac">
                </th>
                <th campo-dato="equipo">
                    <input type="text" id="inputEquipo">
                </th>
                <th campo-dato="activo">
                    <input type="text" id="inputActivo">
                </th>
                <th campo-dato="edad">
                    <input type="text" id="inputEdad">
                </th>
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
    <script src="./ejer24BDListaOrdenaFiltra.js" type="text/javascript"></script>
</body>
</html>
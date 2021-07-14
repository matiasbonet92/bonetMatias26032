<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php26ABM</title>
    <link rel="stylesheet" href="./ejer26BDAbm.css">
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['usuario'])) {
            header('location:../login.html');
            exit();
        }
    ?>
    
    <!-- Diseño Contenedor Base -->
    <div id="contenedorBase">
        <div class="cabeceraTabla">
            <header>Tabla de datos de Jugadores</header>
            <label for="orden">Orden:</label><br>
            <input type="text" readonly id="orden">
            <button id="cargarDatos">Cargar Datos</button>
            <button id="vaciar">Vaciar Datos</button>
            <button id="alta">Alta Registro</button>
            <button id="btCierraSesion">Cierra Sesión</button>
        </div>
        <table id="tabla">
            <thead>
                <tr>
                    <th campo-dato="codjug" id="codjug">Codigo Jugador</th>
                    <th campo-dato="nombre" id="nombre">Nombre</th>
                    <th campo-dato="fecha_nacimiento" id="fnac">F.Nac</th>
                    <th campo-dato="equipo" id="equipo">Equipo</th>
                    <th campo-dato="activo" id="activo">Activo</th>
                    <th campo-dato="edad" id="edad">Edad</th>
                    <th campo-dato="edad" id="pdf">PDF</th>
                    <th campo-dato="edad" id="modificacion">Modi</th>
                    <th campo-dato="edad" id="eliminar">Baja</th>
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
                    <th campo-dato="edad" id="pdf"></th>
                    <th campo-dato="edad" id="modificacion"></th>
                    <th campo-dato="edad" id="eliminar"></th>
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
    </div>

    <!-- Diseño Contenedor Modal Alta Registros -->

    <div id="modalAlta">
        <div class="cabeceraFormularioAlta">
            <header>Formulario de alta de Jugadores - MASTER Jugadores</header>
            <button id="cerrarAlta">X</button>
        </div>
        <div class="formularioAlta">
            <form id="formAlta" method="post" enctype="multipart/form-data">
                <div class="formInternos">
                    <label for="codjug">Codigo Jugador:</label><br>
                    <input type="text" name="codjug" id="codjugAlta" required>
                </div>
                <div class="formInternos">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombrejug" id="nombreAlta" required>
                </div>
                <div class="formInternos">
                    <label for="nac">F.Nacimiento:</label><br>
                    <input type="date" name="nacimiento" id="nacAlta" required>
                </div>
                <div class="formInternos">
                    <label for="equipo">Equipo:</label><br>
                    <select name="equipo" id="equipoAlta" required></select>
                </div>
                <div class="formInternos">
                    <label for="activo">Activo:</label><br>
                    <input type="text" name="activo" id="activoAlta" placeholder="SI / NO" required>
                </div>
                <div class="formInternos">
                    <label for="edad">Edad:</label><br>
                    <input type="number" min="18" name="edad" id="edadAlta" required>
                </div>
                <div class="formInternos">
                    <label for="pdf">PDF:</label><br>
                    <input type="file" name="pdf" id="pdfAlta" required>
                </div>
                <div class="formInternos">
                    <input type="submit" name="" id="enviarAlta" value="Enviar">
                </div>
            </form>
        </div>    
        <footer class="pieFormularioAlta">Pie del formulario</footer>
    </div>

    <!-- Diseño Contenedor Modal Mofificacion Registros -->

    <div id="modalModificacion">
        <div class="cabeceraFormularioModificacion">
            <header>Formulario de Modificacion de Jugadores - MASTER Jugadores</header>
            <button id="cerrarModif">X</button>
        </div>
        <div class="formularioModificacion">
            <form id="formModificacion" method="post" enctype="multipart/form-data">
                <div class="formInternos">
                    <label for="codjug">Codigo Jugador:</label><br>
                    <input type="text" name="codjug" id="codjugModificacion" required>
                </div>
                <div class="formInternos">
                    <label for="nombre">Nombre Completo:</label><br>
                    <input type="text" name="nombrejug" id="nombreModificacion" required>
                </div>
                <div class="formInternos">
                    <label for="nac">Fecha de Nacimiento:</label><br>
                    <input type="date" name="nacimiento" id="nacModificacion" required>
                </div>
                <div class="formInternos">
                    <label for="equipo">Equipo:</label><br>
                    <select name="equipo" id="equipoModificacion" required></select>
                </div>
                <div class="formInternos">
                    <label for="activo">Activo:</label><br>
                    <input type="text" name="activo" id="activoModificacion" placeholder="SI / NO" required>
                </div>
                <div class="formInternos">
                    <label for="edad">Edad:</label><br>
                    <input type="number" min="18" name="edad" id="edadModificacion" required>
                </div>
                <div class="formInternos">
                    <label for="pdf">PDF:</label><br>
                    <input type="file" name="pdf" id="pdfModificacion" required>
                </div>
                <div class="formInternos">
                    <input type="submit" name="" id="enviarModificacion" value="Enviar">
                </div>
            </form>
        </div>    
        <footer class="pieFormularioModificacion">Pie del formulario</footer>
    </div>

    <!-- Diseño Contenedor Modal Respuestas -->

    <div id="modalRespuesta">
        <div class="cabeceraRespuesta">
            <header>Respuesta del Servidor</header>
            <button id="cerrarRespuesta">X</button>
        </div>
        <div id="bodyRespuesta"></div>    
        <footer class="pieRespuesta">Pie del formulario</footer>
    </div>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./ejer26BDAbm.js" type="text/javascript"></script>
</body>
</html>
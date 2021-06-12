<?php
    define("SERVER","localhost");
    define("USUARIO","root");
    define("PASS","");
    define("BASE","labo3_basededatos");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $sql = "select * from tabla_jugadores";

    if (!($resultado=$mysqli->query($sql))) {
        die();
    }

    $cantidadRegistrosResultado = $resultado->num_rows;

    $jugadores=[];

    while($fila = $resultado->fetch_assoc()){
        $objJugador = new stdClass();
        $objJugador->codjug=$fila['codjug'];
        $objJugador->nombre=$fila['nombre'];
        $objJugador->fecha_nacimiento=$fila['fecha_nacimiento'];
        $objJugador->equipo=$fila['equipo'];
        $objJugador->activo=$fila['activo'];
        $objJugador->edad=$fila['edad'];
        array_push($jugadores,$objJugador);
    }

    $objJugadores = new stdClass();
    $objJugadores->jugadores = $jugadores;
    $objJugadores->cuentaRegistros = $cantidadRegistrosResultado;

    $salidaJson = json_encode($objJugadores);

    $mysqli->close();

    echo $salidaJson;
?>
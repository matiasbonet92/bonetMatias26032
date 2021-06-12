<?php
    sleep(2);

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $sql = "select * from tabla_jugadores";

    $resultado=$mysqli->query($sql);

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
<?php
    define("SERVER","localhost");
    define("USUARIO","root");
    define("PASS","");
    define("BASE","labo3_basededatos");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $sql = "select equipo from tabla_jugadores";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    $equipos=[];

    while($fila = $resultado->fetch_assoc()){
        $objEquipo = new stdClass();
        $objEquipo->equipo=$fila['equipo'];
        array_push($equipos,$objEquipo);
    }

    $objEquipos = new stdClass();
    $objEquipos->equipos = $equipos;

    $salidaJson = json_encode($objEquipos);

    $mysqli->close();

    echo $salidaJson;
?>
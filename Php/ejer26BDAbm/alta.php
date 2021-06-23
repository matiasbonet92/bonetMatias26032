<?php

    define("SERVER","localhost");
    define("USUARIO","root");
    define("PASS","");
    define("BASE","labo3_basededatos");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    $codjug = $_GET['codjug'];
    $nombre = $_GET['nombre'];
    $fnac = $_GET['fnac'];
    $equipo = $_GET['equipo'];
    $activo = $_GET['activo'];
    $edad = $_GET['edad'];

    $sql = "insert into tabla_jugadores (codjug,nombre,fecha_nacimiento,equipo,activo,edad) values (?,?,?,?,?,?)";
    
    $respuesta = "";

    if ( ! ($sentencia = $mysqli->prepare($sql)) ) {
        $respuesta = $respuesta . "<br/> Fallo la preparacion del Template: ('. $mysqli->errno .') " . $mysqli->error;
    }else{

        if ( ! $sentencia->bind_param('sssssi',$codjug,$nombre,$fnac,$equipo,$activo,$edad) ) {
            $respuesta = $respuesta . "<br/>Falló la vinculación de parámetros simples: (' . $sentencia->errno . ') " . $sentencia->error;
        }else{
            if ( ! $sentencia->execute() ) {
                $respuesta = $respuesta . "<br/>Falló la ejecución de parametros simples: (' . $sentencia->errno . ') " . $sentencia->error;
                die();
            }else{
                $respuesta = $respuesta . "<br/>Datos obtenidos!";
                $resultado = $sentencia->get_result(); 
            }
        }
    }

    $mysqli->close();
?>
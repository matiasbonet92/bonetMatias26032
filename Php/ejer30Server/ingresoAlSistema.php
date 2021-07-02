<?php

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");

    //apertura de conexion con la base de datos para datos que no son blob
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    //creo variables con los datos
    $id = $_GET['id'];
    $pass = $_GET['pass'];

    $sql = "select * from usuarios where id LIKE ? and pass LIKE ?";

    $respuesta = "";

    if ( ! ($sentencia = $mysqli->prepare($sql)) ) {
        $respuesta = $respuesta . "<br/> Fallo la preparacion del Template: ('. $mysqli->errno .') " . $mysqli->error;
    }else{

        if ( ! $sentencia->bind_param('ss',$id,$pass) ) {
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

    while($fila = $resultado->fetch_assoc()){
        if ( ! $fila['id'] == $id && $fila['pass'] == $pass) {
            header('Location: ./formularioDeLogin.html'); 
            exit();
        }else{
            header('Location: ./app'); 
        }
    }

    $mysqli->close();
?>

<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        header('location:../login.html');
        exit();
    }
?>
<?php

    sleep(4);

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");
    
    //apertura de conexion con la base de datos para datos que no son blob
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    //creo variables con los datos
    $codjug = $_POST['codModi'];
    $nombre = $_POST['nombreModi'];
    $fnac = $_POST['nacModi'];
    $equipo = $_POST['equipoModi'];
    $activo = $_POST['activoModi'];
    $edad = $_POST['edadModi'];

    $sql = "update tabla_jugadores set codjug=?,nombre=?,fecha_nacimiento=?,equipo=?,activo=?,edad=?,pdf=? where codjug=?;";
    
    $respuesta = "";

    //creo variables con los datos
    if ( empty($_FILES['pdfModi']['name']) ) {
            $respuesta = $respuesta . "<br/> No ha sido ningun archivo para enviar!";
    }else{
            $respuesta = $respuesta . "<br/> Trae PDF asociado a codJug:" . $codjug;
            $contenidoPdf = file_get_contents($_FILES['pdfModi']['tmp_name']);
    }

    if ( ! ($sentencia = $mysqli->prepare($sql)) ) {
        $respuesta = $respuesta . "<br/> Fallo la preparacion del Template: ('. $mysqli->errno .') " . $mysqli->error;
    }else{

        if ( ! $sentencia->bind_param('sssssiss',$codjug,$nombre,$fnac,$equipo,$activo,$edad,$contenidoPdf,$codjug) ) {
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
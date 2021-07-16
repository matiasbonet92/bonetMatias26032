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

    //apertura de conexion con la base de datos para datos 
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    //creo variables con los datos
    $codjug = $_POST['codAlta'];
    $nombre = $_POST['nombreAlta'];
    $fnac = $_POST['nacAlta'];
    $equipo = $_POST['equipoAlta'];
    $activo = $_POST['activoAlta'];
    $edad = $_POST['edadAlta'];

    $sql = "insert into tabla_jugadores (codjug,nombre,fecha_nacimiento,equipo,activo,edad,pdf) values (?,?,?,?,?,?,?);";

    $respuesta = "";

    //creo variables con los datos
    if ( empty($_FILES['pdfAlta']['name']) ) {
            $respuesta = $respuesta . "<br/> No ha sido ningun archivo para enviar!";
    }else{
            $respuesta = $respuesta . "<br/> Trae PDF asociado a codJug:" . $codjug;
            $contenidoPdf = file_get_contents($_FILES['pdfAlta']['tmp_name']);
    }

    if ( ! ($sentencia = $mysqli->prepare($sql)) ) {
        $respuesta = $respuesta . "<br/> Fallo la preparacion del Template: ('. $mysqli->errno .') " . $mysqli->error;
    }else{

        if ( ! $sentencia->bind_param('sssssis',$codjug,$nombre,$fnac,$equipo,$activo,$edad,$contenidoPdf) ) {
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
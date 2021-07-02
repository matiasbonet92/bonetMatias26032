<?php
    include('../manejoSesion.inc');
?>
<?php

    sleep(2);

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");

    //apertura de conexion con la base de datos para datos que no son blob
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    //creo variables con los datos
    $codjug = $_POST['codjug'];
    $nombre = $_POST['nombrejug'];
    $fnac = $_POST['nacimiento'];
    $equipo = $_POST['equipo'];
    $activo = $_POST['activo'];
    $edad = $_POST['edad'];

    $sql = "insert into tabla_jugadores (codjug,nombre,fecha_nacimiento,equipo,activo,edad,pdf) values (?,?,?,?,?,?,?)";

    $respuesta = "";

    //creo variables con los datos
    if ( ! isset($_FILES['pdf'] )) {
        $respuesta = $respuesta . "<br/> No esta inicializada la variable:";
    }else{
        if ( empty($_FILES['pdf']['name']) ) {
            $respuesta = $respuesta . "<br/> No ha sido ningun archivo para enviar!";
        }else{
            $respuesta = $respuesta . "<br/> Trae PDF asociado a codJug:" . $codjug;
            $respuesta = $respuesta . "<br/> Nombre original del archivo subido:" . $_FILES['pdf']['name'];
            $contenidoPdf = file_get_contents($_FILES['pdf']['tmp_name']);
        }
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
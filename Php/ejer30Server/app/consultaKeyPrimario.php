<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        header('location:../login.html');
        exit();
    }
?>
<?php

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    $codjug = $_GET["codjug"];

    $sql = "select * from tabla_jugadores where codjug='$codjug'";

    $respuesta = "";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    $cantidadRegistrosResultado = $resultado->num_rows;

    $objRespuesta = new stdClass();
    $objRespuesta->cantRegistros = $cantidadRegistrosResultado;

    $salidaJson = json_encode($objRespuesta);

    $mysqli->close();

    echo $salidaJson;
?>
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

    $sql = "select pdf from tabla_jugadores where codjug = '$codjug'";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    while($fila = $resultado->fetch_assoc()){
        $objPdf = new stdClass();
        $objPdf->documentoPdf=base64_encode($fila['pdf']);
    }
    
    $mysqli->close();

    $salidaJson = json_encode($objPdf,JSON_INVALID_UTF8_SUBSTITUTE);

    echo $salidaJson;
?>
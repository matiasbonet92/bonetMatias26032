<?php
    define("SERVER","localhost");
    define("USUARIO","root");
    define("PASS","");
    define("BASE","labo3_basededatos");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    $codjug = $_GET["codjug"];

    $sql = "delete from tabla_jugadores where codjug = '$codjug'";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };
    
    $mysqli->close();
?>
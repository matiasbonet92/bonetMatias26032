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

    $sql = "select * from usuarios where id='$id'";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    while($fila = $resultado->fetch_assoc()){
        $passServidor = $fila['pass']; 
        if ( $passServidor == $pass) {
            $aceptado = true;
        }else{
            $aceptado = false; 
        }
    }

    $mysqli->close();

    if (!$aceptado) {
        header('Location: ./login.html'); 
        exit(); 
    }else{
        header('Location: ./app/index.php ');
    }
    
?>

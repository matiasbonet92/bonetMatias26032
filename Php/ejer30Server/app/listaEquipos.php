<?php
    session_start();

    if(!isset($_SESSION['identificativoDeSesion'])) {
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
    $sql = "select * from equipos";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    $equipos=[];

    while($fila = $resultado->fetch_assoc()){
        $objEquipo = new stdClass();
        $objEquipo->equipo=$fila['nombre_equipo'];
        array_push($equipos,$objEquipo);
    }

    $objEquipos = new stdClass();
    $objEquipos->equipos = $equipos;

    $salidaJson = json_encode($objEquipos);

    $mysqli->close();

    echo $salidaJson;
?>
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

    $codjug = $_GET["codjug"];

    $sql = "select * from tabla_jugadores where codjug = '$codjug'";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };

    $jugador=[];

    while($fila = $resultado->fetch_assoc()){
        $objJugador = new stdClass();
        $objJugador->codjug=$fila['codjug'];
        $objJugador->nombre=$fila['nombre'];
        $objJugador->fecha_nacimiento=$fila['fecha_nacimiento'];
        $objJugador->equipo=$fila['equipo'];
        $objJugador->activo=$fila['activo'];
        $objJugador->edad=$fila['edad'];
        array_push($jugador,$objJugador);
    }

    $objJugadores = new stdClass();
    $objJugadores->jugador = $jugador;

    $salidaJson = json_encode($objJugadores);

    $mysqli->close();

    echo $salidaJson;
?>
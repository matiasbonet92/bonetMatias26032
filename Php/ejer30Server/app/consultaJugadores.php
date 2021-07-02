<?php
    include('../manejoSesion.inc');
?>
<?php
    sleep(2);

    define("SERVER","bax2kqxnnk1s3idf8ngv-mysql.services.clever-cloud.com");
    define("USUARIO","ufjr1niricfjywxs");
    define("PASS","fWotIYy5meVgqF9mPrta");
    define("BASE","bax2kqxnnk1s3idf8ngv");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    $orden = $_GET["orden"];
    $filtro_codigo = $_GET['filtro_codigo'];
    $filtro_nombre = $_GET['filtro_nombre'];
    $filtro_fnac = $_GET['filtro_fnac'];
    $filtro_equipo = $_GET['filtro_equipo'];
    $filtro_activo = $_GET['filtro_activo'];
    $filtro_edad = $_GET['filtro_edad'];

    $sql = "select * from tabla_jugadores where ";
    $sql = $sql . "codjug LIKE ? and ";
    $sql = $sql . "nombre LIKE ? and ";
    $sql = $sql . "fecha_nacimiento LIKE ? and ";
    $sql = $sql . "equipo LIKE ? and ";
    $sql = $sql . "activo LIKE ? and ";
    $sql = $sql . "edad LIKE ?";
    $sql = $sql . " order by " . $orden;

    $respuesta = "";

    if ( ! ($sentencia = $mysqli->prepare($sql)) ) {
        $respuesta = $respuesta . "<br/> Fallo la preparacion del Template: ('. $mysqli->errno .') " . $mysqli->error;
    }else{
        $likefiltro_codigo = "%" . $filtro_codigo . "%";
        $likefiltro_nombre = "%" . $filtro_nombre . "%";
        $likefiltro_fnac = "%" . $filtro_fnac . "%";
        $likefiltro_equipo = "%" . $filtro_equipo . "%";
        $likefiltro_activo = "%" . $filtro_activo . "%";
        $likefiltro_edad = "%" . $filtro_edad . "%";

        if ( ! $sentencia->bind_param('ssssss',$likefiltro_codigo,$likefiltro_nombre,$likefiltro_fnac,$likefiltro_equipo,$likefiltro_activo,$likefiltro_edad) ) {
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

    $cantidadRegistrosResultado = $resultado->num_rows;

    $jugadores=[];

    while($fila = $resultado->fetch_assoc()){
        $objJugador = new stdClass();
        $objJugador->codjug=$fila['codjug'];
        $objJugador->nombre=$fila['nombre'];
        $objJugador->fecha_nacimiento=$fila['fecha_nacimiento'];
        $objJugador->equipo=$fila['equipo'];
        $objJugador->activo=$fila['activo'];
        $objJugador->edad=$fila['edad'];
        array_push($jugadores,$objJugador);
    }

    $objJugadores = new stdClass();
    $objJugadores->jugadores = $jugadores;
    $objJugadores->cuentaRegistros = $cantidadRegistrosResultado;

    $salidaJson = json_encode($objJugadores);

    $mysqli->close();

    echo $salidaJson;
?>
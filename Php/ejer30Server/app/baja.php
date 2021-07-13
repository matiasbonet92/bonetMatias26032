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

    $sql = "delete from tabla_jugadores where codjug = '$codjug'";

    if( ! ($resultado=$mysqli->query($sql)) ){
        die();
    };
    
    $mysqli->close();
?>
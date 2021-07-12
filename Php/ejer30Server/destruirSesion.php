<?php
    session_start();

    if(!isset($_SESSION['identificativoDeSesion'])) {
        header('location: ./login.html');
        exit();
    }
    
    session_destroy();
    header('Location:./login.html');
?>
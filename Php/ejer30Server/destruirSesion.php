<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        header('location: ./login.html');
        exit();
    }
    
    session_destroy();
    header('Location:./login.html');
?>
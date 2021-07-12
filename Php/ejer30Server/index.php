<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        header('location: ./login.html');
        exit();
    }else{
        header('location: ./app');
    }
?>
<?php
    session_start();

    If(!isset($_SESSION['identificativoDeSesion'])) {
        header('location:./login.html');
        exit();
    }
?>
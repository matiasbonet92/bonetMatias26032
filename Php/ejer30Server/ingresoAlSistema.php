<?php

if(isset($_POST['submit'])){
    $user = $_POST['usuario'];
    $password = $_POST['pass'];

    if (($user == "root") && ($password == "root")) {
       session_start();
       $_SESSION['usuario'] = session_id();
       sleep(1);
       header("location: ./app");
    } else {
       sleep(1);
       header("location: ./login.html");
    }
}
    
?>

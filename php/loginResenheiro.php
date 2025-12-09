<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    session_start();
    $_SESSION['usuario'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['hash'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $_SESSION['id_usuario'] = hexdec(uniqid());;
    header("location: ". $_SESSION['page']);
    exit();   
?>
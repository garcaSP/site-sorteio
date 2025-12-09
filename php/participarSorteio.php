<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    include("util.php");
    session_start();
    $conn = conecta();

    if(isset($_SESSION['usuario']) && isset($_SESSION['email']) && isset($_SESSION['id_usuario']))
    {
    }
    else
    {

        $_SESSION['page'] = "php/participarSorteio.php";
        echo 'abc';
        header("location: form-loginResenheiro.html");
        exit();
    }

    
    $id_sorteio = $_GET['id'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['hash'];
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO sorteio (id_sorteio, usuario, email, senha, criador_resenheiro, id_usuario, id_sorteou) VALUES (:id_sorteio, :usuario, :email, :senha, false, :id_usuario, -1)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id_sorteio', $id_sorteio);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(":id_usuario", $id_usuario);
    
    $stmt->execute();
    header("location: ../sorteio.php?id=".$id_sorteio)
?>
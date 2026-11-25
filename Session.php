<?php 
    session_start();
    if (!isset($POST['usuario'])){
        header("Location: login.php");
        exit();
    }
    //verificar se o usuário e a senha estão corretos

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];

    header("Location: home.php")



?>
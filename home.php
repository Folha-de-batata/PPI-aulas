<?php 
    session_start();
    if (!isset($POST['usuario'])){
        header("Location: login.php");
        exit();
    }
    echo "Bem-vindo, " . $_SESSION['usuario'] . "!";

    //imprimir usuário e senha
    echo "<br>Usuário: " . $_SESSION['usuario']. "<br>Senha: " . $_SESSION['senha'];
?>
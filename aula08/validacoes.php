<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$login_usuario = "admin";
$login_senha = "lalala123";

// Se usuário uu senha forem invalidos
if ($usuario !== $login_usuario || $senha !== $login_senha) {

    // redireciona para index.php enviando um codigo de erro via GET
    header('location:index.php?code=1');
} else {

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    header('location:home.php');
}

?>

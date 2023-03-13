<?php

session_start();


if (!isset($_SESSION['prof_id'])) {
    //redirecionar para o login
    header("location: index-loginProfessor.php");
    $mensagem = "Acesso negado.";
}

?>
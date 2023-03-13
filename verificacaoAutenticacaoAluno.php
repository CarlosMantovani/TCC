<?php

session_start();


if (!isset($_SESSION['aluno_id'])) {
    //redirecionar para o login
    
    header("location: index-login.php");
    die("Acesso negado.");
}
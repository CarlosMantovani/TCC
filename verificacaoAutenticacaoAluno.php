<?php

session_start();


if (!isset($_SESSION['aluno_id'])) {
    //redirecionar para o login
    
    die("Acesso negado.");
}



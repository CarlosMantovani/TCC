<?php

session_start();


if (!isset($_SESSION['prof_id'])) {
    //redirecionar para o login
    
    die("Acesso negado.");
}

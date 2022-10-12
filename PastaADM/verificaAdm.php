<?php

session_start();

if (!isset($_SESSION['adm_id'])) {
    //redirecionar para o login
    
    die("Area apenas para ADM sai daqui agora!!");
}

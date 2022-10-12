<?php
//Faz o logout do sistema

if (!isset($_SESSION)) {
    session_start();
}

session_unset();
session_destroy();

header("location: index.php");

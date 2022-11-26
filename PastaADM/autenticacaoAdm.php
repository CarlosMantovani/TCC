<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
if(isset($_POST['entrar'])):

    $senha = $_POST['senha'];

    $sql = "select * from adm where senha = '{$senha}'";  

    $resultado = mysqli_query($conexao, $sql);
    $numLinhas = mysqli_num_rows($resultado);

    if ($numLinhas > 0){
        $linha = mysqli_fetch_assoc($resultado);

        session_start();
        $_SESSION['adm_id'] = $linha['idadm'];
        $_SESSION['adm_senha'] = $linha['senha'];
    
        header("location: cadastroProf.php");
    }else{
        $mensagem = "Senha invalida";
    header("location: index.php?mensagem={$mensagem}");
    }
endif;

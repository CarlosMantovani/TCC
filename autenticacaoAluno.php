<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
if(isset($_POST['entrar'])):

      

    $email= $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from aluno where email = '{$email}' and senha = '{$senha}'";  

    $resultado = mysqli_query($conexao, $sql);
    $numLinhas = mysqli_num_rows($resultado);

    if ($numLinhas > 0){
        $linha = mysqli_fetch_assoc($resultado);

        session_start();
        $_SESSION['aluno_id'] = $linha['id'];
        $_SESSION['aluno_nome'] = $linha['nome'];
    
        header("location: salaDeAula-aluno.html");
    }else{
        $mensagem = "Usuario/Senha invalidos";
    header("location: index.php?mensagem={$mensagem}");
    }
endif;

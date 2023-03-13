<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
if (isset($_POST['entrar'])):



    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from aluno where email = '{$email}' and senha = '{$senha}'";

    $resultado = mysqli_query($conexao, $sql);
    $numLinhas = mysqli_num_rows($resultado);

    if ($numLinhas > 0) {
        $linha = mysqli_fetch_assoc($resultado);

        session_start();
        $_SESSION['aluno_id'] = $linha['idaluno'];
        $_SESSION['aluno_nome'] = $linha['nome'];
        $_SESSION['aluno_imagem'] = $linha['imagem'];
        header("location: salaDeAulaAluno.php");
    } else {
      echo '<script>
        window.location.href="index-login.php";
        alert("Senha/Usuario Incorreto");
</script>';
    }
endif;
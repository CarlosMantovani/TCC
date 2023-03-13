<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
if (isset($_POST['entrar'])):


    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from prof where email = '{$email}' and senha = '{$senha}'";

    $resultado = mysqli_query($conexao, $sql);
    $numLinhas = mysqli_num_rows($resultado);

    if ($numLinhas > 0) {
        $linha = mysqli_fetch_assoc($resultado);

        session_start();
        $_SESSION['prof_id'] = $linha['idProf'];
        $_SESSION['prof_nome'] = $linha['nome'];
        $_SESSION['prof_imagem'] = $linha['imagem'];

        header("location: salaDeAula.php");

    } else {
        echo '<script>
        window.location.href="index-login-professor.php";
        alert("Senha/Usuario Incorreto");
</script>';
    }
endif;

?>
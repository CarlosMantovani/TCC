<?php

    if(isset($_POST['entrar'])):

        //pega os dados do formulario

        $email= $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "select * from  usuario where email = '{$email}' and senha = '{$senha}'";  


$conexao = mysqli_connect('127.0.0.1', 'root', '', 'ifpr');
$resultado = mysqli_query($conexao, $sql);
$numLinhas = mysqli_num_rows($resultado);

if ($numLinhas > 0){
    echo "Usuario logado";
}

else{
    echo "Usuario/Senha invalido";
}
    endif;
?>
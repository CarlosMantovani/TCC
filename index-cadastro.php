<?php
      $conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

function validaCPF($cpf) {
    if (strpos($cpf, "-") !== false)
    {
        $cpf = str_replace("-", "", $cpf);
    }
    if (strpos($cpf, ".") !== false)
    {
        $cpf = str_replace(".", "", $cpf);
    }
    $sum = 0;
    $cpf = str_split( $cpf );
    $cpftrueverifier = array();
    $cpfnumbers = array_splice( $cpf , 0, 9 );
    $cpfdefault = array(10, 9, 8, 7, 6, 5, 4, 3, 2);
    for ( $i = 0; $i <= 8; $i++ )
    {
        $sum += $cpfnumbers[$i]*$cpfdefault[$i];
    }
    $sumresult = $sum % 11;  
    if ( $sumresult < 2 )
    {
        $cpftrueverifier[0] = 0;
    }
    else
    {
        $cpftrueverifier[0] = 11-$sumresult;
    }
    $sum = 0;
    $cpfdefault = array(11, 10, 9, 8, 7, 6, 5, 4, 3, 2);
    $cpfnumbers[9] = $cpftrueverifier[0];
    for ( $i = 0; $i <= 9; $i++ )
    {
        $sum += $cpfnumbers[$i]*$cpfdefault[$i];
    }
    $sumresult = $sum % 11;
    if ( $sumresult < 2 )
    {
        $cpftrueverifier[1] = 0;
    }
    else
    {
        $cpftrueverifier[1] = 11 - $sumresult;
    }
    $returner = false;
    if ( $cpf == $cpftrueverifier )
    {
        $returner = true;
    }


    $cpfver = array_merge($cpfnumbers, $cpf);

    if ( count(array_unique($cpfver)) == 1 || $cpfver == array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0) ) {
        $returner = false;
    }

    return $returner;
}

if (isset($_POST['cadastrar'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'] ;
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $senha= $_POST['senha'];	
        $sexo= $_POST[ 'sexo'];
        $telefone= $_POST[ 'telefone'];
        
        if (!validaCPF($cpf)) {
            $mensagem = "CPF inválido.";
        } else {
            $sql = "insert into aluno (nome, cpf, email, data_nasc, senha, sexo, telefone) 
                        values ('$nome','$cpf', '$email', '$data_nasc', '$senha','$sexo', '$telefone')";

            mysqli_query($conexao, $sql);
            header("location: index-login.php");
        }
        
    } 



?>



<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>

	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style-cadastro.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>Tela Cadastro</title>
    <script src="https://kit.fontawesome.com/c620f812f4.js" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: #011936;">
	
    <?php if (isset($mensagem)) { ?>
        <h2><?= $mensagem ?></h2>
    <?php } ?>

	<div class="container" style="overflow-y: auto">
		<div class="img">
			<img src="img/undraw_online_cv_re_gn0a.svg">
		</div>
		<div class="login-content">
			<form method="post" action=""> 
				<h2 class="title">Cadastre-se</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nome</h5>
           		   		<input  name="nome" type="text" class="input" id="nome" required>
           		   </div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                        <i class="fa-regular fa-address-card"></i>
                    </div>
                    <div class="div">
                            <h5>CPF</h5>
                            <input  name="cpf" type="text" class="input" id="cpf" maxlength="14" onKeyPress="FormataCPF()" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fa-regular fa-at"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input  name="email" type="text" class="input" id="email" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="div">
                            <h5>Data De Nascimento </h5>
                            <input  name="data_nasc" type="text" class="input" id="data_nasc" maxlength="10"  onkeypress="mascaraData( this, event)" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="div">
                            <h5>Telefone</h5>
                            <input  name="telefone" type="text" class="input" id="telefone" onkeypress="mask(this, mphone)" required maxlength="16"  >
                    </div>
                 </div>
                 <div class="input-div one">
                        <div class="i">
                                <i class="fa-solid fa-key"></i>
                        </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input name="senha" type="password" class="input" id="senha" required>
            	   </div>
            	</div>
                <div id="chekbox">
                    Masculino<input type="radio" class="radio" name="sexo" value="masculino" style="margin-right: 4%">      
                    Feminino <input type="radio" class="radio" name="sexo" value="feminino" >
                  </div>
                  
            	 <span>Ja possui conta: <a href="index-login.php">Entrar</a></span>
            	<input type="submit" class="btn" value="cadastrar" name="cadastrar">
            </form>
        </div>


    </div>
    <script src="main-index-cadastro.js"></script>
</body>
</html>

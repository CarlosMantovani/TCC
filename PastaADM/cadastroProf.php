<?php require_once("verificaAdm.php") ?>
<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
if (isset($_POST['cadastrar'])) {

    $diretorio = "../uploads/";
    $arquivoDestino = $diretorio . $_FILES['imagem']['name'];
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivoDestino)) {   

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $siape = $_POST['siape'];
        $senha= $_POST['senha'];	
        $imagem = $_FILES['imagem']['name'];

        $sql = "insert into prof (nome, email, siape, senha, imagem) 
                    values ('$nome', '$email', '$siape', '$senha', '$imagem')";
        //die($sql);
        mysqli_query($conexao, $sql);
        echo '<script>
        window.location.href="cadastroProf.php";
        alert("Professor Cadastrado com sucesso");
</script>';
      
        $mensagem = "ERRO AO CADASTRAR USUÁRIO. IMAGEM NÃO ENVIADA.";
    }
    else {
        $mensagem = "ERRO AO CADASTRAR USUÁRIO. IMAGEM NÃO ENVIADA.";
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
			<img src="../img/undraw_online_cv_re_gn0a.svg">
		</div>
       
		<div class="login-content">
			<form method="post" action="" enctype="multipart/form-data"> 
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
                        <i class="fa-regular fa-at"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input  name="email" type="text" class="input" id="email" required>
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fa-regular fa-address-card"></i>
                    </div>
                    <div class="div">
                            <h5>Siape</h5>
                            <input  name="siape" type="text" class="input" id="siape" maxlength="14" onKeyPress="FormataCPF()" required>
                    </div>
                 </div>
                 <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="form-control">
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
              
    
            	<input type="submit" class="btn" value="cadastrar" name="cadastrar">
            </form>
            <script src="main.js"></script>
        </div>

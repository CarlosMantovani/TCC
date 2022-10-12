
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>

	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>loguin</title>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: #011936;">
	
	<div class="container">
		<div class="img">
			<img src="../img/undraw_secure_login_pdn4.svg">
		</div>
		<div class="login-content">
			<form method="post" action="autenticacaoAdm.php">
		
				<h2 class="title" style="margin: 0;">Bem Vindo ADM</h2>
           		
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input name="senha" type="password" class="input" id="senha" required>
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="Entrar" name="entrar">
            </form>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>

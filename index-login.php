
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>

	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>loguin</title>
	<script src="https://kit.fontawesome.com/c620f812f4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: #011936;">
	
	<div class="container">
		<div class="img">
			<img src="img/undraw_secure_login_pdn4.svg">
		</div>
		<div class="login-content">
			<form method="post" action="autenticacaoAluno.php">
				<img src="">
				<h2 class="title">Bem Vindo</h2>
           		<div class="input-div one">
           		   <div class="i">
					  <i class="fa-solid fa-at"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input  name="email" type="text" class="input" id="email" required>
           		   </div>
           		</div>
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
    <script src="main-login.js"></script>
</body>
</html>

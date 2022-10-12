<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

if (isset($_POST['OK'])) {
	
	$nome = $_POST['nome'];
	$ano_ingresso = $_POST['ano_ingresso'];
	$serie = $_POST['serie'];
	$qtd_alunos = $_POST['qtd_alunos'];
	$turma_aluno_idturma_aluno = $_POST['turma_aluno_idturma_aluno'];
	$curso = $_POST['curso'];
	$sql = "insert into turma (nome, ano_ingresso, serie, qtd_alunos, turma_aluno_idturma_aluno, curso) 
	values ('$nome','$ano_ingresso', '$serie', '$qtd_alunos', '$turma_aluno_idturma_aluno','$curso')";

	mysqli_query($conexao, $sql);
	header("location: salaDeAula.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style-turma.css">
	<link rel="stylesheet" href="style-sideBar.css">
	<script src="https://kit.fontawesome.com/c620f812f4.js" crossorigin="anonymous"></script>
	<title>Sala De Aula</title>
</head>

<body style="background-color: #011936;">
	<form method="post">

		<div class="flex">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<p class="card-text">Criar Turma</p>
				</div>
				<ul class="list-group list-group-flush">
					<div class="label-float">
						<li class="list-group-item"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" name="nome" id="nome" required>
							<label for="nome">Nome:</label>
						</li>
					</div>
					<div class="label-float">
						<li class="list-group-item"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" name="ano_ingresso" id="ano_ingresso">
							<label for="ano_ingresso">Ano De Ingresso:</label>
						</li>
					</div>
					<div class="label-float">
						<li class="list-group-item"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" name="serie" id="serie">
							<label for="serie">Serie:</label>
						</li>
					</div>
					<div class="label-float">
						<li class="list-group-item"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" name="qtd_alunos" id="qtd_alunos">
							<label for="qtd_alunos">Quantidade De Alunos:</label>
						</li>
					</div>
					<div class="label-float">
						<li class="list-group-item"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" name="turma_aluno_idturma_aluno" id="turma_aluno_idturma_aluno">
							<label for="turma_aluno_idturma_aluno">Id Da Turma:</label>
						</li>
					</div>
					<div class="label-float">
						<select class="form-select" aria-label="Default select example" name="curso">
							<option selected>Curso:</option>
							<option value="1">1 - Informática</option>
							<option value="2">2 - Edificações</option>
							<option value="3">3 - Química</option>
						</select>

						</li>
					</div>
				</ul>
				<div id="center">
					<input type="submit" class="btn" name="OK" value="OK">
				</div>

			</div>
		</div>
	</form>
</body>

</html>
<!--Para melhor entendimento do professor criar um hover ou algo parecido para quando passar o mause em cima abra uma sugestao doque é para fazer no campo ID turma-->
<?php
session_start();

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

$sql2 = "SELECT * FROM arduino";
$resultado2 = mysqli_query($conexao, $sql2);
$linha2 = mysqli_fetch_array($resultado2);

if (isset($_POST['OK'])) {

  $turma_idturma = $_POST['turma_idturma'];
  $aluno_idaluno = $_SESSION['aluno_id'];

  $sql = "insert into turma_has_aluno (aluno_idaluno,turma_idturma	) 
	values ('$aluno_idaluno','$turma_idturma')";

  mysqli_query($conexao, $sql);
  header("location: salaDeAulaAluno.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style-turma.css">
    <link rel="stylesheet" href="style-sideBar.css">
    <link rel="stylesheet" href="style-cad-more.css">
    <link rel="stylesheet" href="style-salaDeAula.css">
    <script src="https://kit.fontawesome.com/c620f812f4.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Here I am</title>
</head>

<body style="background-color: #011936;">

    <div class="container">

        <div class="navigation">
            <ul class="list">
                <li class="list-item"><a href="salaDeAulaAluno.php">
                        <span class="icon">
                        <abbr title="Voltar A Home"><i class="fa-solid fa-house"></i></abbr>
                        </span>
                    </a>
                </li>
                <abbr title="Alterar Perfil">
                    <li class="list-item"><a href="#">
                            <?php
                              //session_start();
                              if (isset($_SESSION['aluno_imagem'])) {
                              ?><a href="profile.php?idaluno=<?= $_SESSION['aluno_id']?>"> <img
                                    src="uploads/<?php echo $_SESSION['aluno_imagem'] ?>" width="40" height="40"
                                    style="border-radius: 50%;"> </a>
                            <?php } else { ?>
                            <span class="icon"><i class="fa-regular fa-user"></i></span>
                            <?php } ?>
                        </a>
                    </li>
                </abbr>
                <li class="list-item"><a href="sair.php">
                        <span class="icon">
                        <abbr title="Fechar Sistema"><i class="fa-solid fa-right-from-bracket"></i></abbr>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div id="myNav" class="overlay">

            <div class="overlay-content">
                <form method="post">
                    <div class="card" style="width: 29rem;
    margin: 20px;
    border: 5px solid black;
    height: 12rem;
    background: rgba( 255, 255, 255, 0.05 );
    backdrop-filter: blur( 2px );
    -webkit-backdrop-filter: blur( 2px );
">
                        <div class="card-body" style="display: flex;
justify-content: center;  

background: rgba( 255, 255, 255, 0.05 );

backdrop-filter: blur( 2px );
-webkit-backdrop-filter: blur( 2px );
">
                            <span id="i" onclick="closeNav()"><i class="fa-solid fa-xmark fa-2xl"></i> </span>
                            <p class="card-text" style="display: inline-block;
    font-size: 24px;
    color: #ffffff;
    font-family: none;">Entrar Em Uma Turma</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="label-float">
                                <li class="list-group-item"><input class="form-control form-control-lg" type="text"
                                        placeholder=".form-control-lg" aria-label=".form-control-lg example"
                                        name="turma_idturma" id="turma_idturma" required>
                                    <label for="turma_idturma">Codigo Da Turma:</label>
                                </li>
                            </div>
                        </ul>
                        <div id="center">
                            <input type="submit" class="btn" name="OK" value="OK">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="flexBox">
            <?php

      $sql = "select turma.* 
             from turma 
       inner join turma_has_aluno on turma_has_aluno.turma_idturma = turma.idturma
            where turma_has_aluno.aluno_idaluno =" . $_SESSION['aluno_id'];

      $resultado = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultado)) :
      ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">
                        <?php
              switch ($linha['curso']) {
                case '1':
                  $curso = "Edificações";
                  break;
                case '2':
                  $curso = "Informática";
                  break;
                default:
                  $curso = "Química";
                  break;
              }
              $disc = $linha['serie'] . "ºAno" . " - " . $linha['nome'] . " - " . $curso;
              echo $disc;
              ?></h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="card-fotter">
                            <abbr title="Alunos Da Turma">
                                <a href="lista-aluno-aluno.php?idturma=<?= $linha['idturma'] ?>&disc=<?= $disc ?>"
                                    class="card-link"><i class="fa-solid fa-users fa-2x "></i> </a>
                            </abbr>
                            <abbr title="Relatorio De Presença">
                                <a href="relatorioAlunoAluno.php?idturma=<?= $linha['idturma'] ?>&disc=<?= $disc ?>&id_aluno=<?= $_SESSION['aluno_id'];?>"
                                    class="card-link"><i class="fa-regular fa-newspaper fa-2x "></i></a>
                            </abbr>
                        </div>
                    </li>
                </ul>
            </div>
            <?php endwhile; ?>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">
                <div class="card" style="width: 18rem;margin: 20px;
  border: 5px solid black;
  height: 15rem;
  box-shadow: 6px 6px 0px 0px rgb(0 0 0 / 54%);
  border-radius: 4%;
  background-color: #8AB3D8;">
                    <div class="card-header">
                        <h5 class="card-title" style="text-align: center;color:black;">
                            Adicionar Nova Turma
                        </h5>
                    </div>
                    <div class="card-body" style="display: flex; justify-content: center;">
                        <i class="fa-solid fa-circle-plus fa-3x" style="color:black"></i>
                    </div>

                </div>
            </span>
            <a href="uptadete.php?aluno_id=<?= $_SESSION['aluno_id']; ?>&exemplo=<?=  $linha2['exemplo'];?>"
                style="text-decoration: none;">
                <span style="font-size:30px;cursor:pointer">
                    <div class="card" style="width: 18rem;margin: 20px;
          border: 5px solid black;
          height: 15rem;
          box-shadow: 6px 6px 0px 0px rgb(0 0 0 / 54%);
          border-radius: 4%;
          background-color: #8AB3D8;">
                        <div class="card-header">
                            <h5 class="card-title" style="text-align: center; color:black">
                                Cadastrar Sua Digital
                            </h5>
                        </div>
                        <div class="card-body" style="display: flex; justify-content: center;">
                            <i class="fa-solid fa-fingerprint fa-3x" style="color:black"></i>
                        </div>
                    </div>
                </span>
            </a>
        </div>

    </div>
    <script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
    </script>
</body>

</html>
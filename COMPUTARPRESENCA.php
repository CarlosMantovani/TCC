<?php

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
session_start();
  $idturma = $_GET['idturma'];
    $sql2 = "SELECT aluno.digital_check, aluno.nome, aluno.idaluno FROM aluno
            INNER JOIN arduino on arduino.exemplo = aluno.digital_check";
    

$resultado = mysqli_query($conexao, $sql2);
$linha = mysqli_fetch_array($resultado);
$idaluno = $linha['idaluno']; 

if (isset($linha))
{
    $sql3 = "INSERT INTO registro_presenca (turma_idturma, aluno_idaluno) VALUE ('$idturma', $idaluno)";
    $resultado2 =  mysqli_query($conexao, $sql3); 
    $cadastro= "Presença Computada Com Sucesso";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style-alert.css">
    <script src="https://kit.fontawesome.com/d2fce36515.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-sideBar.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Here I am</title>
</head>

<body style="background-color: #011936;">

    <div class="navigation">
        <ul class="list">
            <li class="list-item"><a href="salaDeAula.php">
                    <span class="icon">
                    <abbr title="Voltar A Home"><i class="fa-solid fa-house"></i></abbr>
                    </span>
                </a>
            </li>
            <li class="list-item"><a href="#">
                    <?php
          
          if (isset($_SESSION['prof_imagem'])) {
          ?>
                    <img src="uploads/<?php echo $_SESSION['prof_imagem'] ?>" width="40" height="40"
                        style="border-radius: 50%;">
                    <?php } else { ?>
                    <span class="icon"><i class="fa-regular fa-user"></i></span>
                    <?php } ?>
                </a>
            </li>
            <li class="list-item"><a href="sair.php">
                    <span class="icon">
                    <abbr title="Fechar Sistema"><i class="fa-solid fa-right-from-bracket"></i></abbr>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div id="flex">
        <div class="alert alert-success" role="alert">
            <span id="center"><?php echo $cadastro?><i class="fa-solid fa-check fa-2x"></i></span>
        </div>
    </div>
</body>

</html>

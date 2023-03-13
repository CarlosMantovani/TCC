<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
$datainicial = "Total";
$datafinal = "Total";
$WHERE = "";

if (isset($_POST['Buscar'])) {
  $data = date('d-m-Y');
  $datainicial = $_POST["datainicial"];
  $datafinal = $_POST["datafinal"];
  date('Y-m-d', strtotime($datainicial));
  date('Y-m-d', strtotime($datafinal));

  $WHERE = " AND data1 BETWEEN '{$datainicial}' AND '{$datafinal}' ";
}


$sql = "SELECT aluno.idaluno, aluno.nome, aluno.email, count(aluno.idaluno) as presenca
  FROM  registro_presenca
  inner join aluno on aluno.idaluno =  registro_presenca.aluno_idaluno
  where  registro_presenca.turma_idturma = ". $_GET['idturma'] ."
  {$WHERE} 
  GROUP BY aluno.idaluno 
  ORDER BY aluno.nome";

$resultado = mysqli_query($conexao, $sql);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Here I am</title>

    <script src="https://kit.fontawesome.com/d2fce36515.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style-relatorio.css">
    <link rel="stylesheet" href="style-sideBar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color: #011936;">
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
                          session_start();
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
    <div class="container">

        <div class="flex">
            <h3>
                <?= $_GET['disc'] ?>
            </h3>

        </div>
        <table class="table table-primary" style="border-radius: 10px;">
            <form method="post">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Numero De Presenças</th>
                        <th scope="col">Data Inicial <input id="datainicial" name="datainicial" type='date'></th>
                        <th scope="col">Data Final <input id="datafinal" name="datafinal" type='date'></th>
                        <th scope="col"><input type="submit" class="button3" value="Buscar" name="Buscar"></th>
                    </tr>
                </thead>
            </form>
            <tbody>


                <?php while ($linha = mysqli_fetch_array($resultado)):
      ?>
                <tr>
                    <td>
                        <?= $linha['nome'] ?>
                    </td>
                    <td>
                        <?= $linha['email'] ?>
                    </td>
                    <td>
                        <?= $linha['presenca'] ?>
                    </td>
                    <td>
                        <?php 
                           echo $datainicial;   
                        ?>
                    </td>
                    <td>
                        <?php 
                                echo $datafinal;
                             ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


    </div>

    <script>
    //window.print()
    </script>

</body>

</html>
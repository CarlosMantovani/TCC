<?php require_once("verificaAutenticacaoProf.php") ?>
<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');



if (isset($_GET['aluno_idaluno'])) {
  $aluno_idaluno = $_GET['aluno_idaluno'];
  $sql = "delete from turma_has_aluno where aluno_idaluno = {$aluno_idaluno}";
  mysqli_query($conexao, $sql);
  $mensagem = "Usuário excluído com sucesso.";
}

$sql = "select aluno.nome, aluno.email, aluno_idaluno
          from turma_has_aluno 
    inner join aluno on aluno.idaluno = turma_has_aluno.aluno_idaluno
         where turma_has_aluno.turma_idturma = " . $_GET['idturma']
         ." order by aluno.nome";
      
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
    <link rel="stylesheet" type="text/css" href="style-listar.css">
    <link rel="stylesheet" href="style-sideBar.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?family= Roboto: wght @300 & display=swap" rel="stylesheet">

</head>

<body style="background-color: #011936;">
    <?php if (isset($mensagem)) { ?>
    <div class="center">
        <div class="alert alert-warning" role="alert">

            <?php echo $mensagem ;
                           
                    ?>

        </div>
    </div>
    <?php } ?>
    <div class="navigation">
        <ul class="list">
            <li class="list-item"><a href="salaDeAula.php">
                    <span class="icon">
                    <abbr title="Voltar A Home"><i class="fa-solid fa-house"></i></abbr>
                    </span>
                </a>
            </li>
            <li class="list-item">
                <?php
        
          if (isset($_SESSION['prof_imagem'])) {
          ?>
                <img src="uploads/<?php echo $_SESSION['prof_imagem'] ?>" width="40" height="40"
                    style="border-radius: 50%;">
                <?php } else { ?>
                <i class="fa-regular fa-user"></i>
                <?php } ?>
            </li>
            <li class="list-item"><a href="index.php">
                    <span class="icon">
                    <abbr title="Fechar Sistema"><i class="fa-solid fa-right-from-bracket"></i></abbr>
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="container">

        <div class="flex">
            <h3><?= $_GET['disc'] ?></h3>

        </div>
        <table class="table table-primary" style="border-radius: 10px;">
            <thead>
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Excluir</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($linha = mysqli_fetch_array($resultado)) :
        ?>
                <tr>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['email'] ?></td>
                    
                        <td><abbr title="Excluir Aluno"><a
                                href="lista-aluno.php?aluno_idaluno=<?= $linha['aluno_idaluno'] ?>&idturma=<?= $_GET['idturma'] ?>&disc=<?= $_GET['disc'] ?>"><button
                                    type="submit" class="btn btn-danger" name="excluir"
                                    onclick="return confirm('Deseja excluir esse cadastro?')"> <i
                                        class="fa-solid fa-trash-can"></i></button></a></td>
                    </abbr>

                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

    <script>
    // window.print()
    </script>

</body>

</html>
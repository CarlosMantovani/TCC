<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

$sql = "select aluno.idaluno, aluno.nome, aluno.email 
          from turma_has_aluno 
    inner join aluno on aluno.idaluno = turma_has_aluno.aluno_idaluno
         where turma_has_aluno.turma_idturma = " . $_GET['idturma'] .
         " ORDER BY aluno.nome";
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
    <link rel="stylesheet" href="Styles/reset.css">
    <link rel="stylesheet" type="text/css" href="style-listar.css">
    <link rel="stylesheet" href="style-sideBar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color: #011936;">


    <div class="navigation">
        <ul class="list">
            <li class="list-item"><a href="salaDeAulaAluno.php">
                    <span class="icon">
                        <i class="fa-solid fa-house"></i>
                    </span>
                </a>
            </li>
            <?php session_start();?>
            <li class="list-item"><a href="profile.php?idaluno=<?= $_SESSION['aluno_id']?>">
                    <?php
            
            if (isset($_SESSION['aluno_imagem'])) {
            ?>
                    <img src="uploads/<?php echo $_SESSION['aluno_imagem'] ?>" width="40" height="40"
                        style="border-radius: 50%;">
                    <?php } else { ?>
                    <span class="icon"><i class="fa-regular fa-user"></i></span>
                    <?php } ?>
                </a>
            </li>

            <li class="list-item"><a href="sair.php">
                    <span class="icon">
                        <i class="fa-solid fa-right-from-bracket"></i>
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

                </tr>
            </thead>
            <tbody>
                <?php while ($linha = mysqli_fetch_array($resultado)) :
        ?>
                <tr>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['email'] ?></td>


                    </a>


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
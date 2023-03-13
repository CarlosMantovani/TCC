<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

$sql2 = "select * from aluno where idaluno = " . $_GET['idaluno'];
$resultado = mysqli_query($conexao, $sql2);
$linha2 = mysqli_fetch_array($resultado);

if (isset($_POST['Alterar'])):
    if($_POST['senha'] == $_POST['senha2']){
        
        $idaluno = $_GET['idaluno'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $sql = "update aluno
                    set telefone = '{$telefone}',
                    senha = '{$senha}'
                        where idaluno = {$idaluno}";


        mysqli_query($conexao, $sql);
    
        
        $mensagem4 = "Dados Alterados";
    } else {
        $mensagem4 = "SENHAS NÃO CONFEREM!";
    }

endif;

?>



<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>

    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="style-sideBar.css">
    <title>Here I am</title>
    <script src="https://kit.fontawesome.com/d2fce36515.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<body style="background-color: #011936;">
    <?php if (isset($mensagem4)) { ?>
    <div class="flex">
        <div class="alert alert-warning" role="alert">
            <?php echo $mensagem4 ;
            ?>
        </div>
    </div>
    <?php } ?>
    <div class="navigation">
        <ul class="list">
            <li class="list-item"><a href="salaDeAulaAluno.php">
                    <span class="icon" style="color:black ;">
                    <abbr title="Voltar A Home"><i class="fa-solid fa-house"></i></abbr>
                    </span>
                </a>
            </li>
            <li class="list-item"><a href="#">
                    <?php
                    session_start();
                    if (isset($_SESSION['aluno_imagem'])) {
                    ?>
                    <a href="profile.php?idaluno=<?= $_SESSION['aluno_id'] ?>"> <img
                            src="uploads/<?php echo $_SESSION['aluno_imagem'] ?>" width="40" height="40"
                            style="border-radius: 50%;"> </a>
                    <?php } else { ?>
                    <span class="icon"><i class="fa-regular fa-user"></i></span>
                    <?php } ?>
                </a>
            </li>
            <li class="list-item"><a href="sair.php">
                    <span class="icon" style="color:black ;">
                    <abbr title="Fechar Sistema"><i class="fa-solid fa-right-from-bracket"></i></abbr>
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <form method="post">
        <div class="container">

            <div class="main-body">
            </div>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <li class="list-item" style="list-style: none;"><a href="#">
                                        <?php
                                            
                                            if (isset($_SESSION['aluno_imagem'])) {
                                            ?> <img src="uploads/<?php echo $_SESSION['aluno_imagem'] ?>" width="200"
                                            height="200" style="border-radius: 55%;">
                                    </a>
                                    <?php } else { ?>
                                    <span class="icon"><i class="fa-regular fa-user"></i></span>
                                    <?php } ?>
                                    </a>
                                </li>
                                <div class="mt-3">
                                    <h4>
                                        <?php echo $linha2['nome']; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nome Completo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $linha2['nome']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $linha2['email']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="flex">


                                <div class="brenin">
                                    <label for="telefone">Telefone</label>
                                    <input name="telefone" type="text" class="input" id="telefone"
                                        onkeypress="mask(this, mphone)" placeholder="<?php echo $linha2['telefone'] ?>"
                                        required>
                                </div>

                                <div class="brenin">
                                    <label for="senha" class="form-label"> Nova Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" minlength="8"
                                        required>

                                    <label for="senha2" class="form-label"> Nova Senha</label>
                                    <input type="password" class="form-control" id="senha2" name="senha2" minlength="8"
                                        required>
                                </div>
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-12">

                                <input type="submit" class="button" value="Alterar" name="Alterar">
                                <a href="salaDeAulaAluno.php"><input type="button" class="button1" value="Voltar"
                                        name="voltar"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
    <script src="main-index-cadastro.js"></script>

</body>

</html>
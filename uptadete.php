<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
session_start();

    $idaluno= $_SESSION['aluno_id'];
    $exemplo = $_GET["exemplo"];
    
    $sql1 = "SELECT * FROM aluno WHERE idaluno = 'idaluno'";
    $sql2 = "UPDATE aluno SET digital_check ='$exemplo' WHERE idaluno ='$idaluno'";
    if($exemplo == null || $idaluno == null){
        echo "NULO";
    }else{
        $busca = mysqli_query($conexao, $sql1);
        $atualizar = mysqli_query($conexao, $sql2);
        if($busca){
           $cadastro= "Digital Cadastrada Com Sucesso";
        }else{
            $cadastro="não cadastrou";
        }
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
            <li class="list-item"><a href="salaDeAulaAluno.php">
                    <span class="icon">
                    <abbr title="Voltar A Home"><i class="fa-solid fa-house"></i></abbr>
                    </span>
                </a>
            </li>
            <abbr title="Alterar Perfil">  <li class="list-item"><a href="#">
                        <?php
          //session_start();
          if (isset($_SESSION['aluno_imagem'])) {
          ?>
              <a href="profile.php?idaluno=<?= $_SESSION['aluno_id']?>"> <img
                                    src="uploads/<?php echo $_SESSION['aluno_imagem'] ?>" width="40" height="40"
                                    style="border-radius: 50%;"> </a>
                            <?php } else { ?>
                            <span class="icon"><i class="fa-regular fa-user"></i></span>
                            <?php } ?>
                        </a>
          
                </li></abbr>
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
            <span id="center"><?php echo $cadastro?><i class="fa-solid fa-fingerprint fa-2x"></i></span>
        </div>
    </div>
</body>

</html>
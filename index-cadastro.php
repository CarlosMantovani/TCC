<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');


if (isset($_POST['cadastrar'])) {
    $diretorio = "uploadsAluno/";
    $arquivoDestino = $diretorio . $_FILES['imagem']['name'];

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivoDestino)) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $senha = $_POST['senha'];
        $senha1 = $_POST['senha1'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $imagem = $_FILES['imagem']['name'];

        if ($senha == $senha1) {
            $sql = "insert into aluno (nome, cpf, email, data_nasc, senha, sexo, telefone,imagem) 
            values ('$nome','$cpf', '$email', '$data_nasc', '$senha','$sexo', '$telefone', '$imagem')";
mysqli_query($conexao, $sql);
header("location: index-login.php");
        }
        else{  
           
            $invalida  = "Senhas Não conferem";
          
        }
            
        }
        
    }



?>



<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>



    <title>Here I am</title>
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/c620f812f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style-cadastro.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script type=text/javascript>
function _cpf(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

function validarCPF(el) {
    if (!_cpf(el.value)) {

        alert("CPF inválido! " + el.value);

        // apaga o valor
        el.value = "";
    }
}

function name(params) {

}
</script>
<?php if (isset($invalida)) { ?>

<body style="background-color: #011936;">
    <div class="flex-box" style="display: flex;
    justify-content: center;">
        <div class="color" style="background-color: #fff3cd;
    width: 16em;
    height: 33px;
    text-align: center;
    line-height: 31px;">
            <?php echo $invalida ;
                    ?>
        </div>
    </div>
    <?php } ?>
    <div class="container" style="overflow-y: auto">
        <div class="img">
            <img src="img/undraw_online_cv_re_gn0a.svg">
        </div>
        <div class="login-content">
            <form method="post" action="" enctype="multipart/form-data">
                <h2 class="title">Cadastre-se</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nome</h5>
                        <input name="nome" type="text" class="input" id="nome" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-regular fa-address-card"></i>
                    </div>
                    <div class="div">
                        <h5>CPF</h5>
                        <input name="cpf" type="text" class="input cpf" id="cpf" onblur="validarCPF(this)" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-regular fa-at"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input name="email" type="text" class="input" id="email" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="div">
                        <h5>Data De Nascimento </h5>
                        <input name="data_nasc" type="text" class="input data" id="data_nasc" maxlength="10"
                            onkeypress="mascaraData( this, event)" required minlength="10">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Telefone</h5>
                        <input name="telefone" type="text" class="input" id="telefone" onkeypress="mask(this, mphone)"
                            required maxlength="16" required minlength="16">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input name="senha" type="password" class="input" id="senha" required minlength="8">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <div class="div">
                        <h5>Confimar Senha</h5>
                        <input name="senha1" type="password" class="input" id="senha1" required minlength="8">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Foto De Perfil</label>
                    <input type="file" name="imagem" id="imagem" class="form-control">
                </div>
                <div id="chekbox">
                    Masculino<input type="radio" class="radio" name="sexo" value="masculino" style="margin-right: 4%">
                    Feminino <input type="radio" class="radio" name="sexo" value="feminino">
                </div>

                <span>Ja possui conta: <a href="index-login.php">Entrar</a></span>
                <input type="submit" class="btn" value="cadastrar" name="cadastrar" required>
            </form>
        </div>


    </div>
    <script src="main-index-cadastro.js"> </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.cpf').mask('000.000.000-00');
        $('.data').mask('00/00/0000');

    })
    </script>
</body>

</html>
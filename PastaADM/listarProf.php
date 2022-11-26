
<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');
$sql = "select * from prof";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Cadastrar</title>

    <script src="https://kit.fontawesome.com/82438cf95d.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body style="background-color:aliceblue ;">
 

    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
             
                </tr>
            </thead>
            <tbody>
                <?php while ($linha = mysqli_fetch_array($resultado)) : ?>
                    <tr>
                        <td>
                            <?php
                            if ($linha['imagem']) :
                                $imagem = $linha['imagem'];
                            ?>
                                <a href="<?php echo $imagem ?>" target="_blank">
                                    <img src="<?php echo $imagem ?>" width="40" height="40">
                                </a>
                            <?php
                            endif;
                            ?>
                        </td>

                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['email'] ?></td>
    
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>

</html>
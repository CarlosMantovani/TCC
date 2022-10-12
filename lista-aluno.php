<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

$sql = "select * from aluno";
$resultado = mysqli_query($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar usuário</title>

  <script src="https://kit.fontawesome.com/d2fce36515.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Styles/reset.css">
  <link rel="stylesheet" type="text/css" href="style-listar.css">
  <link rel="stylesheet" href="style-sideBar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color: #011936;">
  <nav>
    <div class="navigation">
      <ul class="list">
        <li class="list-item"><a href="#">
            <span class="icon">
              <i class="fa-solid fa-house"></i>
            </span>
          </a>
        </li>
        <li class="list-item">

         
        </li>
        <li class="list-item"><a href="index.php">
            <span class="icon">
              <i class="fa-solid fa-right-from-bracket"></i>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">

    <div class="flex">
      <h3>Nome E Emails Dos Alunos</h3>
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
         
          </tr>
     <?php endwhile; ?>
      </tbody>
    </table>

  </div>

<script>
  window.print()
</script>

</body>

</html>
<?php require_once("verificaAutenticacaoProf.php") ?>
<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'hereiam');

$WHERE = "";

if (isset($_POST['Buscar'])) {
  $data = date('d-m-Y');
  $datainicial= $_POST["datainicial"];
  $datafinal = $_POST["datafinal"];
  date('Y-m-d', strtotime($datainicial));
  date('Y-m-d', strtotime($datafinal));

  $WHERE = " AND data1 BETWEEN '{$datainicial}' AND '{$datafinal}' ";
}


$sql = "SELECT aluno.idaluno, aluno.nome, aluno.email, count(aluno.idaluno) as presenca
  FROM  registro_presenca
  inner join aluno on aluno.idaluno =  registro_presenca.aluno_idaluno
  where  registro_presenca.turma_idturma = ". $_GET['idturma'] . "
  {$WHERE} 
  GROUP BY aluno.idaluno";
  
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
  <link rel="stylesheet" type="text/css" href="style-relatorio.css">
  <link rel="stylesheet" href="style-sideBar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color: #011936;">
  <nav>
    <div class="navigation">
      <ul class="list">
        <li class="list-item"><a href="salaDeAula.php">
            <span class="icon">
              <i class="fa-solid fa-house"></i>
            </span>
          </a>
        </li>
        <li class="list-item">
        <?php
        
          if (isset($_SESSION['prof_imagem'])) {
          ?>
            <img src="uploads/<?php echo $_SESSION['prof_imagem'] ?>" width="40" height="40" style="border-radius: 50%;">
            <?php } else { ?>
              imagem
            <?php } ?>
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
    <h3><?= $_GET['disc'] ?></h3>  
    
    </div>
    <table class="table table-primary" style="border-radius: 10px;">
    <thead>
                <tr>
                    
                   
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numero De Presenças</th>
                    <th scope="col">Data Inicial <input id="datainicial" name="datainicial" type = 'date'></th>
                    <th scope="col">Data Final <input id="datafinal" name="datafinal"  type = 'date'></th>
                    <th scope="col"><input type="submit" class="button3" value = "Buscar" nome = "Buscar"></th>
                </tr>
            </thead>
      <tbody>


      <?php while ($linha = mysqli_fetch_array($resultado)) :
        ?>
          <tr>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['email'] ?></td>
            <td><?= $linha['presenca'] ?></td>
           
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
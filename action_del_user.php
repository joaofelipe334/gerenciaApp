<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<?php
  $usr = $_GET['usr']??'';
  $opcao = $_GET['optradio']??'';
  if ($usr == '') {
    echo "<script>alert('Campo do NOME DO USUÁRIO em BRANCO !! ');window.location='index.php?page=del_user'</script>";
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Gerenciamento App</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=inicio">Início</a></li>
          <li><a href="index.php?page=sobre">Sobre</a></li>
          <li class="active"><a href="index.php?page=usuarios">Gerenciamento de Usuário</a></li>
          <li><a href="index.php?page=pacotes">Gerenciamento de Pacote</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <body>
    <?php
    if ($usr != '' && $opcao == 'sim') {
      echo shell_exec("sudo deluser $usr");
      echo "<script>alert('Usuário removido com sucesso e o seu diretorio não foi apagado.')</script>";
    } elseif ($usr != '' && $opcao == 'nao') {
      shell_exec("sudo deluser --remove-home $usr");
      echo "<script>alert('Usuário removido com sucesso')</script>";
    }
     ?>

     <div class="">
       <ul class="pager" style="margin-top: 250px;">
       <button title="Voltar para a página de gerenciamento de usuários" type="button" class="btn btn-default" onclick="location.href='index.php?page=del_user'" style="margin-left: 15px;"> Deletar outro usuário</button>
       <button type="submit" class="btn btn-default" style="margin-left: 30px;" onclick="location.href='index.php?page=inicio'">Ir para Home</button>
       </ul>
     </div>
  </body>
</html>

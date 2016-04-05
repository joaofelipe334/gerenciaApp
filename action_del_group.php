<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<?php
  $group = $_GET['group']??'';
  if ($group == '') {
    echo "<script>alert('Campo do NOME DO GRUPO em BRANCO !! ');window.location='index.php?page=del_group'</script>";
    exit();
  }
  shell_exec("sudo delgroup $group");
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
  <style media="screen">
  h2 {
    text-align: center;
    margin-top: 100px;
  }
  </style>
</head>
<title>Page Title</title>
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
  <h2>O GRUPO <strong><?php echo $group ?> </strong>foi DELETADO com sucesso</h2>
  </div>
  <div class="">
    <ul class="pager">
    <button title="Deletar outro Grupo" type="button" class="btn btn-default" onclick="location.href='index.php?page=del_group'" style="margin-left: 15px;"> Deletar Outro Grupo</button>
    <button type="submit" class="btn btn-default" style="margin-left: 30px;" onclick="location.href='index.php?page=inicio'">Ir para Home</button>
    </ul>
  </div>
</body>

<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="">
  <h2>Gerenciamento de Usuário</h2>
    <div class="col-xs-6 col-md-4">
      <ul class="nav nav-pills nav-stacked" role="tablist">
        <li><a href="index.php?page=add_user">Adcionar Usuário</a></li>
        <li><a href="index.php?page=del_user">Deletar Usuário</a></li>
        <li><a href="index.php?page=add_group">Adicionar Grupo</a></li>
        <li><a href="index.php?page=del_group">Deletar Grupo</a></li>
      </ul>
    </div>
</div>

</body>
</html>

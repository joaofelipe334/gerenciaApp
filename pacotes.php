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
    <title></title>
  </head>
  <body>
    <div class="container" style="padding-left: 4px;">
        <h2>Gerenciamento de Pacotes</h2>
        <div class="col-xs-8 col-md-6">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="index.php?page=install_soft">Instalar Software</a></li>
            <li role="presentation"><a href="index.php?page=desinstall_soft">Desinstalar Software</a></li>
          </ul>
      </div>
    </div>
  </body>
</html>

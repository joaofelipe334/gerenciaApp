<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Bootstrap Example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
  function openwindow() { window.open("http://localhost/dw/list_user.php","google","menubar=no","resizable=no","height=480, width=640, status=yes, toolbar=no, menubar=no, location=no"); }
  </script>
  <style type="text/css">
    a:link{
     text-decoration:none;
    }
    </style>
</head>
<div class="container">
  <h2>Remover Usuários</h2>
  <p>Preencha os campos corretamente</p>

  <form role="form" method="get" action="action_del_user.php">
    <div class="form-group">
      <label title="Nome do usuário no sistema" for="usr">Nome do usuário:</label>
      <input type="text" class="form-control" id="usr" name="usr">
    </div>
    <button title="Listar todos os Usuários do Sistema" class="btn btn-default" type="button" name="list_user" onclick="javascript:openwindow(); return false;"><a href="#">Listar Usuários</a></button>
    <br>
    <br>
    <div class="">
      <h5><strong>Deseja realizar o backup dos arquivos deste usuário?</strong></h5>
      <form role="form">
        <div class="radio">
          <label><input type="radio" name="optradio" value="sim" checked="yes">Sim</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio" value="nao">Não</label>
        </div>
        <div class="form-group">
          <br>
            <button type="submit" class="btn btn-default">Deletar Usuário</button>
        </div>
      </form>
    </div>

  </form>
</div>

<br>

<ul class="pager">
<button title="Voltar para a página de gerenciamento de usuários" type="button" class="btn btn-default" onclick="location.href='index.php?page=usuarios'" style="margin-left: 15px;"> << VOLTAR</button>
</ul>

</body>
</html>

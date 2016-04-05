<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
    function openwindow() { window.open("http://localhost/dw/list_group.php","google","menubar=no","resizable=no","height=480, width=640, status=yes, toolbar=no, menubar=no, location=no"); }
    </script>
    <style type="text/css">
      a:link{
       text-decoration:none;
      }
      </style>
      <title>Deletar Grupo</title>
  </head>
  <body>
    <div class="container">
      <h2>Deletar Grupo</h2>
      <p>Preencha o campo corretamente</p>

      <form role="form" method="get" action="action_del_group.php">
        <div class="form-group">
          <label title="Nome do grupo no sistema" for="group">Nome do grupo:</label>
          <input type="text" class="form-control" id="group" name="group">
        </div>
        <button title="Listar todos os grupos do Sistema" class="btn btn-default" type="button" name="list_group" onclick="javascript:openwindow(); return false;"><a href="#">Listar Grupos</a></button>
        <br>
        <br>
            <div class="form-group">
              <br>
                <button type="submit" class="btn btn-default">Deletar Grupo</button>
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

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
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
      function mostra(el) {
        var display = document.getElementById(el).style.display;
            document.getElementById(el).style.display = 'block';
      }
      function apaga(el) {
        var display = document.getElementById(el).style.display;
        document.getElementById(el).style.display = 'none';
      }
      function openwindow() {
        window.open("http://localhost/dw/list_user.php","Usuários","menubar=no","resizable=no","height=480, width=640, status=yes, toolbar=no, menubar=no, location=no");
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h2>Adicionar um Grupo</h2>
      <p>Preencha os campos corretamente</p>

      <form role="form" method="get" action="action_add_group.php">
        <div class="form-group">
          <label title="Nome para o grupo de usuários" for="addgroup">Nome do grupo:</label>
          <input type="text" class="form-control" name="group">
        </div>
            <h5><strong>Deseja atribuir algum usuário a este novo grupo?</strong></h5>
              <div class="radio">
                <label><input type="radio" name="optradio" onclick="apaga('user_group')" checked="yes" value="no">Não</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio" onclick="mostra('user_group')" value="yes">Sim</label>
              </div>
              <div id="user_group" style="display: none;">
              <label>Qual? <input type="text" name="usr" value="" placeholder="Digite o usuário aqui ..."></label>
              <button title="Listar todos os Usuários do Sistema" class="btn btn-default" type="button" name="" onclick="javascript:openwindow(); return false;"><a href="#">Listar Usuários</a></button>
              </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Criar Grupo</button>
        </div>
      </form>
    </div>
    <br>
    <ul class="pager">
    <button title="Voltar para a página de gerenciamento de usuários" type="button" class="btn btn-default" onclick="location.href='index.php?page=usuarios'" style="margin-left: 15px;"> << VOLTAR</button>
    </ul>
  </body>
</html>

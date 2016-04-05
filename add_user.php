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

</head>
<body>
  <div class="container">
    <h2>Adicionar Usuários</h2>
    <p>Preencha os campos corretamente</p>
    <p>Obs.: Os campos com <strong style="font-size: 160%; color: red;"> * </strong> (asteriscos) são <strong>obrigatórios</strong>!!</p>
    <form role="form" action="action_add_user.php" method="post">
      <div class="form-group">
        <label title="Nome do usuário no sistema" for="usr">Nome do usuário: <strong style="color: red;"> * </strong></label>
        <input type="text" name="usr" class="form-control" id="usr" placeholder="Exemplo.: Alan-Giovanni. Não coloque espaço entre os nomes.">
      </div>

      <div class="form-group">
        <label title="Senha para o usuário" for="pwd">Senha: <strong style="color: red;"> * </strong></label>
        <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Digite aqui a senha ...">
      </div>

      <div class="form-group">
        <label title="Pode ser qualquer informação que desejar" for="coment">Comentários:</label>
        <input type="text" name="coment" class="form-control" id="coment" placeholder="Qualquer informação importante do usuário ...">
      </div>

      <div class="form-group">
        <label title="Informe um grupo a criar ou um grupo que ja exista no sistema" for="group">Grupo:</label>
        <input type="text" name="group" class="form-control" id="group" placeholder="Digite aqui o grupo a qual o usuário fará parte ...">
      </div>

      <div class="form-group">
        <label title="O shell padrão é /bin/bash, preencha este campo caso queira alterar" for="shell">Shell preferencial:</label>
        <input type="text" name="shell" class="form-control" id="shell" placeholder="Digite aqui o shell preferencial para o usuário. O padrão é /bin/bash...">
      </div>
      <br>
      <div class="form-group">
          <button type="submit" class="btn btn-default">Criar Usuário</button>
        </div>
    </form>
  </div>
<br>
<ul class="pager">
<button title="Voltar para a página de gerenciamento de usuários" type="button" class="btn btn-default" onclick="location.href='index.php?page=usuarios'" style="margin-left: 15px;"> << VOLTAR</button>
</ul>

</body>
</html>

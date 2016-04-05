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
    <script type="text/javascript">
      function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
      }
    </script>
  </head>
  <body>
     <h1>Gerenciamento de Usuários e Pacotes no Sistema Linux</h1>
     <h4>
       Esta aplicação tem como objetivo gerenciar pacotes e usuários no sistema linux atual da máquina de modo gráfico e Web, através do computador hospedeiro ou do Celular.
     </h4>
     <br>
     <div id="minhaDiv" style="display: none;">
       <input type="text" name="name" value="My name is TuxBatman" disabled="yes" style="margin-left:30px; text-align: center;">
     </div>
     <br>
     <div>
       <img title="Click em min"src="img/tux-batman.png"/>
       <input type="button" onclick="Mudarestado('minhaDiv')" value="Click Me!" class="btn btn-default">
     </div>
  </body>
</html>

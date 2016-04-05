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
    function openwindow() { window.open("https://www.google.com.br","galeria","menubar=no","resizable=no","height=480, width=640, status=yes, toolbar=no, menubar=no, location=no"); }
    function Mudarestado(el) {
      var display = document.getElementById(el).style.display;
      if(display == "none")
          document.getElementById(el).style.display = 'block';
      else
          document.getElementById(el).style.display = 'none';
    }
  </script>
  <style type="text/css">
    a:link{
     text-decoration:none;
    }

    </style>
</head>
<body>

<div class="container">
  <h2>Desinstalar software</h2>
  <p>Preencha o campo corretamente</p>

  <button title="Listar todos os pacotes instalados" class="btn btn-default" type="button" name="list_soft" onclick="Mudarestado('minhaDiv')"><a href="#">Softwares Instalados</a></button>
  <br>
    <div id="minhaDiv" style="display: none;" >
      <form role="form">
        <div class="form-group">
          <br>
          <textarea class="form-control" rows="5" id="comment" disabled="yes">Aqui será listado os programas</textarea>
        </div>
    </div>
    <br>
  <form role="form">
    <div class="form-group">
      <label title="Nome do pacote a ser instalado no sistema" for="soft">Nome do software:</label>
      <input type="text" class="form-control" id="soft">
    </div>

    <div class="">
            <button type="submit" class="btn btn-default">Desinstalar</button>
    </div>
  </form>
</div>

<br>

<ul class="pager">
<button title="Voltar para a página de gerenciamento de pacotes" type="button" class="btn btn-default" onclick="location.href='index.php?page=pacotes'" style="margin-left: 15px;"> << VOLTAR</button>
</ul>

</body>
</html>

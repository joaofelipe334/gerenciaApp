<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<?php
$var = file_get_contents('/etc/passwd');// Colocar em var o contuedo do arquivo
$lines = explode("\n", $var);// divide o var pela quebra de linha criando um array
$lixo = array_pop($lines);// elimina o ultimo elemento do array que é lixo
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Usuários</title>

    <!-- css para tabela zebrada -->
    <style media="screen">
    table tbody tr:nth-child(2n+1)
    {
    background:lightgray;
    }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></html>
  </head>
  <body>
    <!-- tabela -->
    <table class="table table-bordered">
    <tbody>
      <tr><!--Cabeçalho -->
      <th>Usuario</th>
      <th>Comentarios</th>
      <th>Diretório Home</th>
      <th>Shell</th>
      </tr>

    <?php foreach ($lines as $i => $value): ?> <!-- Percorrer o array lines com a chave sendo i e o valor sendo value  -->

      <?php list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $lines[$i]); ?>  <!-- divide a linha por : e coloca nas variaveis   -->
      <?php if ($uid >= 1000 && $uid != 65534): ?>
        <!-- exibir as variaveis na tabela  -->
        <tr>
        <td><?php echo $user; ?></td>
        <td><?php echo $gecos; ?></td>
        <td><?php echo $home; ?></td>
        <td><?php echo $shell; ?></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; ?>


    </tbody>
  </body>

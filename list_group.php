<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<?php
$var = file_get_contents('/etc/group');// Colocar em var o contuedo do arquivo
$lines = explode("\n", $var);// divide o var pela quebra de linha criando um array
$lixo = array_pop($lines);// elimina o ultimo elemento do array que é lixo
?>

<!-- css para tabela zebrada -->
<style media="screen">
table tbody tr:nth-child(2n+1)
{
background:lightgray;
}
</style>

<!-- tabela -->
<table class="table table-bordered">
<tbody>
  <tr><!--Cabeçalho -->
  <th>Grupo</th>
  <th>Usuarios Associados</th>
  </tr>

<?php foreach ($lines as $i => $value): ?> <!-- Percorrer o array lines com a chave sendo i e o valor sendo value  -->
  <?php list($grup, $pass, $gid, $user) = explode(":", $lines[$i]); ?> <!-- divide a linha por : e coloca nas variaveis   -->
    <?php if ($gid >= 1000 && $gid != 65534): ?>
      <!-- exibir as variaveis na tabela  -->
      <tr>
      <td><?php echo $grup; ?></td>
      <td><?php echo $user; ?></td>
      </tr>
    <?php endif; ?>
<?php endforeach; ?>
</tbody>
</table>

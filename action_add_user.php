<?php
  session_start();
  $logado = $_SESSION['logado'] ?? false;
  if(!$logado){
    $_SESSION['message'] = 'Para acessar o sistema é necessário o login';
    header('Location:login.php');
  }
?>

<?php
  $usr = $_POST['usr']??'';
  $pwd = $_POST['pwd']??'';
  $coment = $_POST['coment']??'';
  $group = $_POST['group']??'';
  $shell = $_POST['shell']??'';

  if ($usr == '') {
    echo "<script>alert('Campo do NOME DO USUÁRIO em BRANCO !! ');window.location='index.php?page=add_user'</script>";
    exit();
  }
  if ($pwd == '') {
    echo "<script>alert('Campo da SENHA em BRANCO !! ');window.location='index.php?page=add_user'</script>";
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Gerenciamento App</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=inicio">Início</a></li>
          <li><a href="index.php?page=sobre">Sobre</a></li>
          <li><a href="index.php?page=usuarios">Gerenciamento de Usuário</a></li>
          <li><a href="index.php?page=pacotes">Gerenciamento de Pacote</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    <div class="container" style="margin-top: 100px; margin-left: 180px;">
      <?php
          $comando = null;
            if ($group != '') {
              $teste = shell_exec("cat /etc/group | grep -c $group");
              if ($teste != 0) {
                $comando = "$comando -g $group -G $group";
              }else {
                $comando = "$comando -g $group -G $group";
                shell_exec("sudo addgroup $group");
              }
              //script para adcionar um grupo
            }

            if ($coment != '') {
              $comando = "$comando -c ,,$coment";
            }
              if ($shell != '') {
                $comando = "$comando -s $shell";
            	} else {
          		    $shell = '/bin/bash';
          		    $comando = "$comando -s $shell";
                  }
            //Atribuindo a variavel adduser o comando todo
            $useradd = "useradd $usr -m -d /home/$usr $comando";

  		      //Comando para adcionar o usuário no sistema;;
  	       	shell_exec("sudo $useradd");
        		//system('sudo -u root -S $useradd');

            //Criptografar a senha do usuário
            shell_exec("sudo usermod $usr -p $(openssl passwd -1 $pwd)");
            /** Testando as entradas
        	echo "O valor do campo USUÁRIO é: " . $usr;
        	echo "<br>";
        	echo "O valor do campo SENHA é: " . $pwd;
        	echo "<br>";
        	echo "O valor do campo COMENTÁRIO é: " . $coment;
        	echo "<br>";
        	echo "O valor do campo GRUPO é: " . $group;
        	echo "<br>";
        	echo "O valor do campo SHELL é: " . $shell;
        	echo "<br>";
        	echo exec("whoami");
            	echo "<br>";
        	echo $useradd;
        	echo "<br>";

        	**/
          ?>
        <h2 style="text-align: center;">O usuário <strong><?php echo $usr ?> </strong>foi adcionado com sucesso</h2>
      </div>
        <div class="">
          <ul class="pager">
          <button title="Voltar para a página de gerenciamento de usuários" type="button" class="btn btn-default" onclick="location.href='index.php?page=add_user'" style="margin-left: 15px;"> Adcionar outro usuário</button>
          <button type="submit" class="btn btn-default" style="margin-left: 30px;" onclick="location.href='index.php?page=inicio'">Ir para Home</button>
          </ul>
        </div>
</body>
</html>

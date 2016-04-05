<?php
$host = "localhost";
$user = "root"
$pass = "";
$banco = "login";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      function login_sucessfully(){
        setTimeout("window.location='index.php'", 4000);
      }

      function login_failed() {
        setTimeout("window.location='login.php'" 4000);
      }
    </script>
  </head>
  <body>
    <?php
    $login=$_POST['login'];
    $pwd=$_POST['pwd'];
    $sql = mysql_query("SELECT * FROM user WHERE login = '$login' and pwd = '$pwd'";
    $row = mysql_num_rows($sql);

    if ($row > 0) {
      session_start()
      $_SESSION['login']=$_POST['login'];
      $_SESSION['pwd']=$_POST['pwd'];
      echo "AUTENTICADO COM SUCESSO";
      echo "<script>login_sucessfully()</script>";
    } else {
      echo "<center>Nome de USUÁRIO ou SENHA inválida ... Aguarde um instante para tentar novamente</center>";
      echo "<script>login_failed()</script>";
    }
    ?>
  </body>
</html>

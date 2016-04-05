<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $host = "localhost";
    $user = "root"
    $pass = "";
    $banco = 'login';
    $conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
    mysql_select_db($banco) or die(mysql_error());
    ?>

    <?php
    $login=$_POST['login'];
    $pwd=$_POST['pwd'];
    $sql = mysql_query("INSERT INTO user(login, pwd) VALUES('$login', '$pwd')");
    ?>

  </body>
</html>

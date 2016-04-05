<?php
session_start();
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
if($login == 'root' && $password == '123qweasd'){
  $_SESSION['logado'] = true;
  header('Location:index.php');
}else{
  $_SESSION['message'] = 'Usuário ou senha inválida.';
  // guarda a senha e login na session
  header('Location:login.php');
}
?>

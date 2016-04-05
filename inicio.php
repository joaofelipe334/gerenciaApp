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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <style>
    img{
      width: 95%;
      height: auto;
    }
  </style>
  <body>
    <h1>Em Construção ...</h1>
    <img src="img/web.jpg"></img>
  </body>
</html>

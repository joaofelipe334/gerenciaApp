<?php
  session_start();
  $message = $_SESSION['message'] ?? '';
  // resgata o login e senha
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      padding-top: 70px;
      margin-left: 500px;
      margin-top: 100px;
    }
    .chart-legend li{
      list-style-type: none;
    }
    .chart-legend li span{
      display: inline-block;
      width: 12px;
      height: 12px;
      margin-right: 5px;
    }
    </style>
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
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    <span><?php echo $message ?></span>
    <form action="auth.php" method="post">
      <label for="login">Login</label>
      <input type="text" name="login" id="login">
      <label for="password">Senha</label>
      <input type="password" name="password" id="password">
      <input type="submit" value="Login">
    </form>

</body>
</html>

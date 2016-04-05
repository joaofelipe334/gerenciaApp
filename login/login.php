<?php
  session_start();
  $message = $_SESSION['message'] ?? '';
  // resgata o login e senha
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
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

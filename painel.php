<?php
  include("php/protect.php");

  if(!isset($_SESSION)){
      session_start();
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="login-card">
    
    <h1>Dados do Usuário</h1>

    <a href="delete.php" class="btn-delete"><i class="fa-solid fa-circle-xmark"></i></a>
    
    <div class="info-field">
      <p class="info">User:</p>
      <p class="info-value"><?= $_SESSION["usuario"]->user_name ?></p>
    </div>
    <div class="info-field">
      <p class="info">E-mail:</p>
      <p class="info-value"><?= $_SESSION["usuario"]->user_email ?></p>
    </div>
    <div class="info-field">
      <p class="info">Password:</p>
      <p class="info-value"><?= $_SESSION["usuario"]->user_password ?></p>
    </div>
    <div class="info-field">
      <p class="info">Age:</p>
      <p class="info-value"><?= $_SESSION["usuario"]->user_age ?></p>
    </div>
    
    <div class="form-control">
      <button type="submit"><a href="editar.php">Editar</a></button>
      <button type="submit" class="btn-logout"><a href="php/logout.php">Logout</a></button>
    </div>
    
  </div>

<!-- <script src="js/script-index.js" defer></script> -->
</body>

</html>

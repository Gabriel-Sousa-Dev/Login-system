<?php
  if(isset($_POST["btnCad"])){
      if(isset($_POST["user"]) && isset($_POST["email"]) && isset($_POST["password"])){
          include("php/conn.php");
          echo "<p style=\"color:white\">pk</p>";
          $nome = $_POST["user"];
          $email = $_POST["email"];
          $senha = $_POST["password"];
          $idade = $_POST["age"] ?? "null";
          
          $query = "INSERT INTO loginSystem.tb_user VALUES(null, ?, ?, ?, ?)";
        
          $stmt = $conn -> prepare($query);
        
          $stmt -> bindParam(1, $nome);
          $stmt -> bindParam(2, $email);
          $stmt -> bindParam(3, $senha);
          $stmt -> bindParam(4, $idade);
          
          $stmt -> execute();

      }else{
          echo "Preencha todos os campos que possuem asteriscos";
      }
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
    
    <h1>Cadastro</h1>
    
    <form id="form-cad" action="" method="post">
      <div class="text-field">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="user" id="user" placeholder="Username*">
      </div>
    
      <div class="text-field">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email*">
      </div>
    
      <div class="text-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password*">
      </div>
    
      <div class="text-field">
        <i class="fa-solid fa-calendar-days"></i>
        <input type="number" name="age" id="age" placeholder="Age">
      </div>
    
      <div class="form-control">
        <button type="submit" name="btnCad" id="btnCad">Cadastrar</button>
        <!-- <button type="reset">Logar</button> -->
      </div>
    </form>
    
  </div>
  
</body>

</html>

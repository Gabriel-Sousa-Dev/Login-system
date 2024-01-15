<?php
  include("php/conn.php");

  if(isset($_POST["user"]) || isset($_POST["password"])){
      if(strlen($_POST["user"]) == 0){
          echo "Digite uma senha";
      }elseif(strlen($_POST["password"]) == 0){
          echo "Digite uma senha";
      }else{
          $email = $_POST["user"];
          $senha = $_POST["password"];
        
          $query = 'SELECT * FROM Login.tb_user WHERE email = ? AND senha = ?';
        
          $stmt = $conn -> prepare($query);
        
          $stmt -> bindParam(1, $email);
          $stmt -> bindParam(2, $senha);
          
          $stmt -> execute();
        
          if($stmt -> rowCount() == 1){
            
            //var_dump($stmt);
            
            //var_dump($usuario);
            
            //var_dump($stmt -> fetch(PDO::FETCH_ASSOC));
            
            //var_dump($stmt -> fetch());
            
            //var_dump($stmt -> fetchAll());
            
            $usuario = $stmt -> fetchObject();
            
            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION["usuario"] = $usuario;
            
            header("location:painel.php");
            
          }else{
              echo "Falha ao logar";
          }
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
    
    <form id="form-login">
      <h1>Login</h1>
      <div class="text-field">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="user" id="user" placeholder="User">
      </div>
      <div class="text-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="form-control">
        <button><a href="cadastro.html">Cadastrar</a></button>
        <button type="submit" name="btnSubmit" id="btnSubmit">Logar</button>
      </div>
    </form>
    
  </div>

<script src="js/script-index.js" defer></script>
</body>

</html

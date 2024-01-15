<?php

  if(!isset($_SESSION)){
      session_start();
  }

  if(!isset($_SESSION["usuario"])){
      die("Você Não pode entrar pois não está logado <p><a href=\"index.php\">Voltar ao login</a></p>");
  }

?>
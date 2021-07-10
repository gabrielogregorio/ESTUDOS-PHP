<?php
// Sessão == navegador aberto
  session_start();
  if(isset($_SESSION['senha'])) {
    echo $_SESSION['senha'];
  } else {
    echo "Perdeu a sessão";
  }

  print_r($_COOKIE['nome']);
?>
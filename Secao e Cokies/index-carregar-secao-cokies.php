<?php 
  session_start();
  $_SESSION['senha'] = 123;

  // Nome, valor, tempo para expirar em s
  // o / é para tornar acessível a todas as páginas
  setcookie('nome', 'Gabriel', time()+(60), '/');
  // TEMPO NEGATIVO DESTROI O COKIE APOS DUAS ASTUALIZACOES

  print_r($_COOKIE['nome']);
?>
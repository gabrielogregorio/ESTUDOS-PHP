<?php

  $conteudo = "0123456789";

  // Fatiamento de strings
  // Onde começar e quantos caracteres pegar
  echo substr($conteudo, 3, 3);
  echo '<br>';

  // Gera uma lista cortando a string por um
  // Caractere
  $nome_sobrenome = "Gabriel Gregório";
  $nome = explode(' ', $nome_sobrenome)[0];
  $sobrenome = explode(' ', $nome_sobrenome)[1];
  echo 'Nome: '.$nome.', Sobrenome:'.$sobrenome;
  echo '<br>';


  // Juntar um array com um delimitador
  $nome_sobrenome_2 = ['Juliano', 'Marcos'];
  echo implode(' ', $nome_sobrenome_2);
  echo '<br>';

  // Remover tags HTML
  $conteudo_html = '<h1 style="color:red; font-size: 2.2rem">Titulo</h1>';
  echo strip_tags($conteudo_html);
  echo '<br>';

  echo htmlentities('<h1>Titulo</h1>');



?>
<?php 
  $array1 = array('Olá mundo','magica'=>1);
  $array2 = array(2=>'Olá mundo 2', 'magica'=>2);

  print_r(array_merge($array1, $array2));
  print_r(array_intersect_key($array1, $array2));
  
  // Aplicatr uma função nas strings
  $array_tags = ['<h1>Titulo</h1>', '<h2>Subtitulo</h2>','<h3>Terceiro titulo</h3>'];
  print_r( array_map('strip_tags', $array_tags));
?>
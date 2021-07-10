<?php
  // Enviando informações via formulário e coletando pela variável POST do PHP
  if(isset($_POST['valor'])) {
    print_r($_POST['valor']);
  }
?>

<form action="formulario.php" method="post">
  <input type="checkbox" name="valor[]" value="10">10
  <input type="checkbox" name="valor[]" value="20">20
  <input type="checkbox" name="valor[]" value="30">30
  <input type="checkbox" name="valor[]" value="40">40
  <input type="checkbox" name="valor[]" value="50">50
  <input type="submit">
</form>
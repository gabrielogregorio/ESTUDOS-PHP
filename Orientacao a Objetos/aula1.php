<?php
include('exemplo.php');

  class Agente {
    private $nome ='Skye';

    private function cegar_base () {
      echo "Cegueeeiiiii";
    }

    public function cegar() {
      $this->cegar_base();
    }
  }

  // Instancia
  $agente = new Agente;
  $agente->cegar();
  echo '<br>';
  $exemplo = new Exemplo();
  echo $exemplo->var2;
  echo '<br>';
  echo Exemplo::$var3;
?>
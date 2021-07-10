<?php
  abstract class Teste {
    public function func1() {
      echo 'FUncao';
    }

    abstract function func2();
  }

  class Principal extends Teste {
    public function func2(){
      echo('CLasse implementada');
    }
  }

  $principal = new Principal;
  $principal->func1();
  $principal->func2();
?>
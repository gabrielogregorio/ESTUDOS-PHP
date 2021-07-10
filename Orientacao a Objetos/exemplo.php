<?php 
  class Exemplo {
    private $var1 = 'var1_private';
    public $var2 = 'var2_public';

    // Estático atravéz apenas da classe
    // Exemplo::var3
    public static $var3 = 'var3_static';
    // protect é um private mas que pode ser chamado em classes que herdaram

    public static function metodoEstatico() {
      echo 'metodo estatico';
    }
    public function chamaEstatico() {
      self::metodoEstatico();
    }
  }

?>
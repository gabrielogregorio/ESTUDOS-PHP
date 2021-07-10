<?php 
    // Final impede de ser herdada
    //final class Animal {
    class Animal {
        public function nome() {
            echo 'Nome do animal';
        }  

        public function latir() {
            echo "Latir animal";
        }
    }

    class Cachorro extends Animal {
        public function latir() {
            echo "Latido do cachorro";
            parent::latir();
        }
    }

    $rex = new Cachorro();
    $rex->nome();
    echo '<br>';
    $rex->latir();
?>
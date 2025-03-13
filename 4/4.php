<?php
class Animal {
    public function fazerSom() {
        echo "Som genérico de animal\n";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au Au\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau\n";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

$cachorro->fazerSom();
$gato->fazerSom();
?>
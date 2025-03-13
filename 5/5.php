<?php
class Zoo {
    public function fazerBarulho(Animal $animal) {
        $animal->fazerSom();
    }
}

$zoo = new Zoo();
$zoo->fazerBarulho(new Cachorro());
$zoo->fazerBarulho(new Gato());
?>
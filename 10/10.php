<?php
class DivisionByZeroException extends Exception {}

class Calculadora {
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new DivisionByZeroException("Divisão por zero não é permitida.");
        }
        return $a / $b;
    }
}

$calculadora = new Calculadora();

try {
    echo $calculadora->dividir(10, 0);
} catch (DivisionByZeroException $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}
?>
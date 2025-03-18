<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}

class DivisionByZeroException extends Exception {}

class Calculadora {
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new DivisionByZeroException("Divisão por zero não é permitida.");
        }
        return $a / $b;
    }
}

// Exemplo de uso da classe ContaBancaria
$conta = new ContaBancaria("Maria", 1000);
$conta->depositar(500);
$conta->sacar(200);
echo "Saldo atual: " . $conta->consultarSaldo() . "\n";

// Exemplo de uso da classe Calculadora
$calculadora = new Calculadora();

try {
    echo "Resultado da divisão: " . $calculadora->dividir(10, 2) . "\n";
    echo "Resultado da divisão: " . $calculadora->dividir(10, 0) . "\n";
} catch (DivisionByZeroException $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}
?>
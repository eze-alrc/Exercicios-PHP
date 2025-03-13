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

$conta = new ContaBancaria("Maria", 1000);
$conta->depositar(500);
$conta->sacar(200);
echo "Saldo atual: " . $conta->consultarSaldo() . "\n";
?>
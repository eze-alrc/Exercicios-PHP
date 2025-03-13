<?php
class Carro {
    public $marca;
    public $modelo;
    public $anoFabricacao;

    public function exibirInformacoes() {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano de Fabricação: {$this->anoFabricacao}\n";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";
$meuCarro->anoFabricacao = 2020;

$meuCarro->exibirInformacoes();
?>
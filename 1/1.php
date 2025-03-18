<?php
class Carro {
    public $marca;
    public $modelo;
    public $anoFabricacao;

    public function exibirInformacoes() {
        echo "Marca: {$this->marca} <br> Modelo: {$this->modelo} <br> Ano de Fabricação: {$this->anoFabricacao}\n";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";
$meuCarro->anoFabricacao = 2020;

$meuCarro->exibirInformacoes();
?>
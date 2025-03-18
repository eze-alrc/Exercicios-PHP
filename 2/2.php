<?php
class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.\n";
    }
}

$pessoa = new Pessoa("João", 25, "Masculino");
$pessoa->falar();
?>
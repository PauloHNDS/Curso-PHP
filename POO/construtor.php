<div class="titulo">Construtor E Destrutor</div>

<?php 

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "Classe destruida";
        }

        public function apresentar() {
            echo "Olá, {$this->nome} <br>";
        }
    }

    $pessoa = new Pessoa("Paulo", 20);

    $pessoa->apresentar();
    unset($pessoa);

?>
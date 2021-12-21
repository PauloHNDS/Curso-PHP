<div class="titulo">Classe</div>

<?php 

    class Cliente {

        public $nome = 'Paulo';
        public $idade = 18;

        public function apresentar() {
            echo "Olá {$this->nome}";
            echo "<br>";
        }
    }

    $c1 = new Cliente();
    $c1->apresentar();
    $c1->nome = 'Paulo henrique';
    $c1->idade = 19;
    $c1->apresentar();
    
?>
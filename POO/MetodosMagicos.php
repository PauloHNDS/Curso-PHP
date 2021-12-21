<div class="titulos">Métodos e Mágicos</div>

<?php 

    class PessoaC {
        public $nome;
        public $idade;

        function __construct($nome,$idade) {
            echo "Construtor <br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'E morreu!';
        }

        public function __toString(){
            return "{$this->nome} tem {$this->idade} anos.";    
        }

        public function aprensentar() {
            echo $this."<br>";
        }

        public function __get($atributo){
            echo "Lendo atributo não declarado: {$atributo} <br>";
            return "<<<<<<<<<<<<<<<<<<<<<<<<<< <br>";
        }

        public function __set($atributo,$valor) {
            echo "Alterando o valor do atributo não declarado: {$atributo} / {$valor}";
        }
        public function __call($name, $arguments){
            echo "Tentaremos executar '{$name}'";
            echo "com os parametros : ";
            print_r($arguments);
        }
    }

    $pessoa = new PessoaC('Ricardo',40);
    $pessoa->aprensentar();
    $pessoa->nome = 'reinaldo';
    echo $pessoa, "<br>";
    $pessoa->aprensentar();

    var_dump($pessoa->nomeCompleto);

    $pessoa->nomeCompleto = 'Muito Legal!!';

    $pessoa->exec();
?>
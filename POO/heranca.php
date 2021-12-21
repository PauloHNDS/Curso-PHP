<div class="titulo">Herança</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa {
        public $noma;
        public $idade;

        function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa criada <br>";
        }

        function __destruct(){
            echo "Tchau !!!!!!!! <br>";
        }

        public function  apresentar() {
            echo "{$this->nome},{$this->idade} anos <br>";
        }
    }

    class Usuario extends GlobalPessoa{
        public $login;

        function __construct($nome,$idade,$login) {
            parent::__construct($nome,$idade);
            $this->login = $login;
            echo "usuario Criado! <br>";
        }
        function __destruct(){
            echo "Usuario diz: Tchau!!! <br>";
            parent::__destruct();
        }

        public function apresentar(){
            echo "@{$this->login}: {$this->nome} : {$this->idade} <br>";
        }
    }

    $usuario = new Usuario("Paulo",25,"Paulo6549");
    $usuario->apresentar();
    unset($usuario);

?>
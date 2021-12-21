<div class="titulo">Visibilidade</div>

<?php 

    class A {
        public $public = "Público";
        protected $protegido = "Protegido";
        private $privado = 'Privado';

        public function mostrar() {
            echo "Class A) Publico = {$this->public} <br>";
            echo "Class A) Protected = {$this->protegido} <br>";
            echo "Class A) Privado = {$this->privado} <br>";
        }

        private function naoMostrar() {
            echo 'não vou ser acessada';
        }
    }

    class B extends A {

        public function mostrar(){
            echo "Class B) Publico = {$this->public} <br>";
            echo "Class B) Protected = {$this->protegido} <br>";
            //echo "Class B) Privado = {$this->privado} <br>";
        }
    }

    $a = new A();
    $a->mostrar();
    $b = new B();
    $b->mostrar();
    
    echo "Fim!!";

?>
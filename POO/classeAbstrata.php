<div class="titulo">Classe Abstrata</div>

<?php 

    abstract class Abstrata {
        abstract public function metodoA();
        abstract public function metodoB();
    }

    abstract class Filha extends Abstrata {
        public function metodoA() {
            echo "Executando método 1<br>";
        }
        
        abstract public function metodoC();
    }

    class Concreta extends Filha {

        public function metodoA(){
            echo "Executando";
            parent::metodoA();
        }
        public function metodoB(){
            echo "Metodo B";
        }
        public function metodoC(){
            echo "Metodo C";
        }

    }


    $c1 = new concreta();
    $c1->metodoA();
?>
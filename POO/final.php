<div class="titulo">Final</div>

<?php

    abstract class AbstrataA {
        abstract public function metodo1();

        final public function metodo2() {
            echo "Não vou mudar!  :( <br>";
        }
    }

    class Classe extends AbstrataA {
        public function metodo1() {
            echo 'Executando método 1<br>';
        }
    }

    $classe = new Classe();
    $classe->metodo1();
    $classe->metodo2();

?>
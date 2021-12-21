<div class="titulo">Static</div>

<?php 

    class A {
        public $naoStatic ="variavel de instancia";
        public static $static = 'Variavel de classe';

        public function mostra() {

            $valor = &self::$static;
            echo "{$this->naoStatic} <br>";
            echo " {$valor} <br>";
        }
        
        public static function mostrarStatic() {
            $valor = &self::$static;
            echo "{$valor} <br>";
        }
    }

    $objeto = new A();
    $objeto->mostra();
    $objeto->mostrarStatic();
    A::mostrarStatic();
?>
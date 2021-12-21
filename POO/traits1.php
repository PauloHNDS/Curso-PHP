<div class="titulo">Traits #1</div>

<?php 

    trait validacao {
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public function validarStringMelhor($str){
            return isset($str) && trim($str);
        }
    }

    class UsuarioA {
        use validacao,validacaoMelhor;
    }

    $usuario  = new UsuarioA();
    var_dump($usuario->validarString(" "));
    echo "<br>";
    var_dump($usuario->validarStringMelhor(" "));
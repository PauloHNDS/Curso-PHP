<div class="titulo">Funções Anônimas</div>

<?php 

    $soma = function ($a , $b) {
        return $a + $b;
    };

    echo $soma(1,2)."<br>";

    function executar($a , $b , $op , $funcao) {
        $resultado = $funcao($a,$b);
        echo "$a $op $b = $resultado <br>";
    }

    executar(3,4,'+',$soma);

    $vezes = function ($a,$b) {
        return $a * $b;
    };
    executar(3,4,'*',$vezes);

?>
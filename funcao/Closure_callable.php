<div class="titulo">Closure e Callble</div>

<?php 

    $soma = function($a,$b) {
        return $a + $b;
    };

    function soma2($a ,$b) {
        return $a + $b;
    }

    echo $soma(2,3)."<br>";
    echo (is_callable($soma) ? 'Sim' : 'Não')."<br>" ;

    echo soma2(2,3). '<br>';
    echo (is_callable(soma2(3,4)) ? 'Sim' : 'Não').'<br>';

    var_dump($soma);
?>
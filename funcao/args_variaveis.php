<div class="titulo">Argumentos e Variaveis</div>

<?php 

    function soma($a , $b){
        return $a + $b;
    }

    function somaCompleta(...$numeros) {
        $soma = 0;
        foreach ($numeros as $key => $value) {
            $soma += $value;
        }
        return $soma;
    }

    function membros($titular, ...$dependentes){
        echo "Titular: $titular <br>";
        if ($dependentes) {
            foreach ($dependentes as $key => $value) {
                echo "Dependentes: $value <br>";
            }
        }
    }

    echo soma(5,6);
    echo "<br>";
    echo somaCompleta(5,3,6,2,1,4);
    echo "<br>";
    echo membros("Ana silva","gabigol","ronaldo","thiago silva");


?>
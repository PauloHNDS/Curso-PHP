<div class="titulo">Foreach</div>

<?php 

    $semana = [
        1 => "domingo",
        "segunda",
        "terça",
        "quarta",
        "quinta",
        "sexta",
        "sabado"
    ];

    foreach ($semana as $diaSemana => $dia) {
        echo "{$dia} <br>";
    }

    foreach ($semana as $diaSemana => $dia) {
        echo " $diaSemana => $dia <br>"; 
    }

    $matrix = [
        ['a','b','c','d','e'],
        ['f','g','h','j','k']
    ];

    foreach ($matrix as $linha) {
        foreach ($linha as $key => $value) {
            echo "$value   ";
        }
        echo "<br>";
    }
?>
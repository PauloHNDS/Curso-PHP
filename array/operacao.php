<div class="titulo">Operações</div>

<?php 

    $dados1 = [
        "nome" => "Paulo",
        "sobrenome" => "santos",
        "idade" => 18,
    ];

    $dados2 = [
        "naturalidade" => "São Paulo"
    ];

    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo '<br>'.is_array($dadosCompletos);
    echo '<br>'.count($dadosCompletos);
    $indice = array_rand($dadosCompletos);
    echo "<br> $indice = $dadosCompletos[$indice]";
    echo "<br> {$dadosCompletos['idade']}";

    unset($dadosCompletos['nome']);
    echo("<br>");
    print_r($dadosCompletos);

    $impares = [1,3,5,7,9];

    $pares = [0,2,4,6,8];

    $decimais = $pares + $impares;

    print_r($decimais);

    $decimais = array_merge($pares,$impares);
    echo '<br>';
    print_r($decimais);

    sort($decimais);
    echo '<br>';
    print_r($decimais);

?>
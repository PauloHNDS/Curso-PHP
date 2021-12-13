<div class="titulo">Array Multidimensionais</div>

<?php 

        $dados = [
        [
            "nome" => "Roberto",
            "sobrenome" => "Silva",
            "idade" => 25,
            "naturalidade" => "São paulo"
        ],
        [
            "nome" => "Maria",
            "sobrenome" => "Clara",
            "idade" => 30,
            "naturalidade" => "Rio de janeiro"
        ]
    ];

    print_r($dados);
    echo '<br>'.$dados[0]['idade'];
    echo '<br>'.$dados[1]['idade'];

    $dados[] = [
        "nome" => "Florinda",
        "sobrenome" => "Julia",
        "idade" => 30,
        "naturalidade" => "Minas gerais"
    ];

    echo '<br>';
    print_r($dados);
    echo '<br>'.$dados[2]['idade'];

    unset($dados[1]);
    echo '<br>';
    print_r($dados);
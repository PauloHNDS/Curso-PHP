<div class="titulo">Array Constantes</div>

<?php 

    const FRUTAS = [
        'laranja',
        'abacaxi'
    ];

    print_r(FRUTAS);

    const CARROS = [
        "Fiat" => "Uno",
        "Ford" => "Fiestra"
    ];
    echo '<br>';
    echo CARROS['Fiat'];
?>
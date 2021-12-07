<div class="titulo">Switch</div>

<?php 

    $categoria = 'luxo';
    $preco = 0.0;
    $carro = '';

    if ($categoria ==='luxo') {
        $carro = 'Mercedes';
        $preco = 2500000;
    } elseif ($categoria === 'SUV') {
        $carro = 'Renegade';
        $preco = 80000;
    } elseif ($categoria === 'Sedan') {
        $carro = 'Etios';
        $preco = 55000;
    } else {
        $carro = 'Mobi';
        $preco = 33000;
    }

?>

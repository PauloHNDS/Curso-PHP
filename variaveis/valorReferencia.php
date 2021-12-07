<div class="titulo">Valor vs Referência</div>

<?php

    $variavel = "variavel valor inicial";

    echo $variavel;

    echo "<br>";

    $variavelValor = $variavel;

    echo $variavelValor;

    echo "<br>";

    $variavelValor = " Valor alterado";
    
    echo "{$variavel} <br> {$variavelValor}";

    $variavelReferencia = &$variavelValor;

    $variavelReferencia = "Valor referência";
    echo "<br>";

    echo " {$variavelValor}";

?>

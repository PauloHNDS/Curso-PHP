<div class="titulo">Desafio Sorteio</div>

<?php 

    $nomes = ["Elza","Rapunzel","Branca de neve","Cinderela"];

    echo "<div center><h1>  {$nomes[array_rand($nomes)]} </h1></div>";

?>


<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
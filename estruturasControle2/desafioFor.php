<div class="titulo">Desafio For</div>

<?php 

    $impressao = '';

    for ($i=0; $i <= 5; $i++) { 
        $impressao .= '#';
        echo $impressao;
        echo '<br>';
    }

    $impressao = '';

    for ($j=5; $j >=0 ; $j--) { 
        $impressao .= '#';
        echo $impressao;
        echo '<br>';
    }

?>
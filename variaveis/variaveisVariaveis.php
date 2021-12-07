<div class="titulo">Variaveis de Variaveis</div>

<?php 

    $a = 5;
    $$a = 10;

    echo(" {$a} {$$a}");

?>
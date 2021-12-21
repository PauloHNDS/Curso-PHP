<div class="titulo">Require com return</div>

<?php 
    $valorRetorno = require('return.php');
    echo $valorRetorno . "<br>";
    echo $variavelRetornada . "<br>";

    echo __DIR__."<br>";

    $valorRetorno2 = include(__DIR__.'/return_.php');
    echo $valorRetorno2."<br>";
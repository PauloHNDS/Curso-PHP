<div class="titulo">Desafio impressao</div>

<?php 

    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for ($i=0; $i < count($array) ; $i++) { 
        if ($i % 2 === 0) {
            echo "$array[$i] <br>";
        } else {
            continue;
        }
    }

    foreach ($array as $key => $value) {
        if ($key % 2 === 0) {
            echo "$value <br>";
        } else {
            continue;
        }
    }

?>
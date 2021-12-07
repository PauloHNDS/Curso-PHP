<div class="titulo">Desafio PI</div>

<?php 

echo(pi());
$pi = 3.14;

if ($pi === pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes";
}

$piErrado = 2.8;

echo('<br>'.($pi - pi()));

echo "<br>";

if ($pi - pi() <= 0.01) {
    echo "Valido";
} else {
    echo "Invalido";
}

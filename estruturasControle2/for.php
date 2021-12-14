<div class="titulo">FOR</div>

<?php 

for ($count=0; $count <= 5; $count++) { 
    echo "$count <br>";
}

$semana = [
    1 => "domingo",
    "segunda",
    "terça",
    "quarta",
    "quinta",
    "sexta",
    "sabado"
];

$matrix = [
    ['a','b','c','d','e'],
    ['f','g','h','j','k']
];

for ($i=1; $i <= count($semana) ; $i++) { 
    echo($semana[$i]);
    echo "<br>";
}

for ($i=0; $i < count($matrix) ; $i++) { 
    for ($j=0; $j < count($matrix[$i]) ; $j++) { 
        echo "{$matrix[$i][$j]} ";
    }
    echo '<br>' ;
}

?>
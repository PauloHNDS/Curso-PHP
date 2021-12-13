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

for ($i=1; $i <= count($semana) ; $i++) { 
    echo($semana[$i]);
    echo "<br>";
}

?>
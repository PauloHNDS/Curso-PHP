<div class="titulo">array</div>
<?php 
$lista = array(1,2,3.4,"texto");

var_dump($lista);

echo "{$lista[0]}";

//var_dump($lista[4]);

$texto = 'Esse é um texto de teste';

echo '<br>'.$texto[0];

echo '<br>'.mb_substr($texto,10,1);
?>
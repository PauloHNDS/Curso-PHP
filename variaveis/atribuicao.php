<?php 
    $titulo = "Atribuição";
    $numero = 10;
    $numero = $numero - 1;
?>

<div class="titulo"><?= $titulo ?></div>

<p><?= $numero ?></p>

<?php 

    $numero = 15;
    echo("{$numero}");
    $numero--;
    echo("<br>");
    echo("{$numero}");
    echo("<br>");
    $numero++;
    echo("{$numero}");
    echo("<br>");
    $numero += 5;
    echo("{$numero}");
    $numero /= 4;
    echo("<br>");
    echo("{$numero}");
    echo("<br>");
    $variavel = $variaveis ?? "Valor Padrão";
    echo($variavel);
?>
<div class="titulo">while/ Do while</div>

<?php 

    const VALOR_LIMITE = 5;
    $contador = 0;

    while ($contador < VALOR_LIMITE) {
        echo "while $contador <br>";
        $contador++;
    }

    do {
        echo " $contador ";
        $contador++;
    } while ($contador <= 10);

?>
<div class="titulo">Operações aritméticas</div>
<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    echo 1 + 2.5, '<br>';
    echo 7 / 4;

    //precedencia PHP
    echo "<p>Precedência</p>";
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2; 
?>
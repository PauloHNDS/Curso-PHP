<div class="titulo">Include vs Require</div>

<?php 
    //ini_set('display_errors',0);
    echo 'Usando include com arquivo que não tem <br>';
    include('arquivo.php');
    echo 'Usando include com arquivo que não tem <br>';
    echo"<hr>";

    echo "Usando require com arquivo que não tem <br>";
    require('arquivo.php');
    echo "Usando require com arquivo que não tem <br>";
    
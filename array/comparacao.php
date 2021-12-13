<div class="titulo">Comparação Arrays</div>

<?php 

    $array1 = ['nome' => 'Maria', 'idade' => 20];
    $array2 = ['nome' => 'Maria', 'idade' => 20];

    var_dump($array1 == $array2);
    var_dump($array1 === $array2);

    $array3 = ['idade' => 20 , 'nome' => 'Maria'];
    
    echo '<br>';

    var_dump($array1 == $array3);
    var_dump($array1 === $array3);

?>
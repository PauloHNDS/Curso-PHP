<div class="titulo">Map & filter</div>

<?php 

    $notas = [5.8,6.7,3.5,8.9];

    $notasFinais = [];


    foreach ($notas as $key => $value) {
        $notasFinais[] = round($value);
    }

    print_r($notasFinais);

    $notasFinais2 = array_map("round", $notas);

    print_r($notasFinais2);


    $apenasAprovados = [];

    foreach ($notas as $key => $value) {
        if ($value >= 7) {
            $apenasAprovados[] = $value; 
        }
    }

    echo '<br>';
    print_r($apenasAprovados);

    function aprovados($nota){
        return $nota >= 7;
    }

    echo "<br>";
    $apenasAprovados2 = array_filter($notas,"aprovados");
    print_r($apenasAprovados2);
?>
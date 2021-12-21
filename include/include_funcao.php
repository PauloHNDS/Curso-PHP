<div class="titulo">Include em função</div>

<?php 

    echo "Carregando: include_funcao <br>";

    function carregar() {
        include('include_arquivo.php');

        echo $variavel.'<br>';
        echo soma(2,5).'!<br>';
    }

    echo 'Novamente no arquivo include_funcao<br>';
    carregar();

?>
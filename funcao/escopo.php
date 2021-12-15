<div class="titulo">Escopo</div>

<?php 

    function imprimirMensagens() {
        echo "Olá";
        echo " até a proxima!";
        echo "<br>";
    }


    imprimirMensagens();

    $variavel = 1;

    function trocaValor() {
        $variavel = 2;
        echo "durante a variavel: $variavel";
        echo "<br>";
    }

    echo "antes $variavel";
    echo "<br>";
    trocaValor();
    echo "depois $variavel";
    echo "<br>";
    
    function setValor($valor){
        global $variavel;
        $variavel = $valor;
        echo "Durante a função: $variavel";
        echo "<br>";
    }

    setValor(5);
    echo "depois da função: $variavel";
    
?>
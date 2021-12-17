<div class="titulo">Argumentos Padrão</div>

<?php 

    function saudacao( $nome = 'Senhor(a)',$sobrenome = 'Cliente') {
        echo "Bem vindo, $nome $sobrenome <br>";
        echo "<hr>";
    }

    saudacao();
    saudacao(NULL);
    saudacao(NULL,NULL);
    saudacao('Paulo','Henrique');

    function anotarPedido($comida,$bebida = 'Água'){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
        echo "<hr>";
    }

    anotarPedido('Hamburguer');
    anotarPedido('Pizza','Refrigerante');

    function anotarPedido2($bebida = 'Água',$comida) {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
        echo "<hr>";
    }

    anotarPedido2('refrigerante','Pizza');
?>
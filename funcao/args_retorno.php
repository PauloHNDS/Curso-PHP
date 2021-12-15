<div class="titulo">Argumentos e Retornos</div>

<?php 

    function obterMensagen() {
        return 'seja bem vindo(a)! <br>';
    }
    
    function obterMensagenComNome($nome){
        return "Bem vindo, {$nome}! <br>";
    }
    
    function Soma($a , $b){
        return $a + $b;
    }

    echo obterMensagen();

    $mensagem = obterMensagen();

    $mensagem2 = obterMensagenComNome("Paulo");

    
    echo $mensagem;
    echo $mensagem2;

    echo Soma(5,5);

?>
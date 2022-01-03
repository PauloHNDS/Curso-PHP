<?php 

function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = '09080706Pp';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);
    
    if($conexao->connect_error) { 
        die('Error: '.$conexao->connect_error);
    }

    return $conexao;
}
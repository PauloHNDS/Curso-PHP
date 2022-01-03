<div class="titulo">Criar Banco</div>

<?php 

    require_once('conexao.php');

    $conexao = novaConexao(null);

    $sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

    if($conexao->query($sql)) {
        echo 'banco criado com sucesso!!';
    } else {
        echo 'banco não criado!!';
    }

    

    $conexao->close();
?>
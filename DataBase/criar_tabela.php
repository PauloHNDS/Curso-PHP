<div class="titulo">Criar tabela</div>

<?php 

    require_once('conexao.php');

    $sql = "CREATE TABLE IF NOT EXISTS CADASTRO (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME VARCHAR(100) NOT NULL,
        NASCIMENTO DATE,
        EMAIL VARCHAR(100) NOT NULL,
        SITE VARCHAR(100) NOT NULL,
        FILHOS INT,
        SALARIO FLOAT
    ) default charset='utf8';";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);
    if ($resultado) {
        echo "criado com sucesso!!";
    } else {
        echo "tabela não foi criada !!!";
    }

    $conexao->close();

?>
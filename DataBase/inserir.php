<div class="titulo">Insert</div>

<?php 

require_once("conexao.php");

$sql = "INSERT INTO CADASTRO
    (NOME, NASCIMENTO,EMAIL,SITE,FILHOS,SALARIO)
    VALUES (
        'MARIETA',
        '1989-10-29',
        'MARIETA@GMAIL.COM',
        'HTTPS://MARIETA.COM.BR',
        2,
        3000
    );";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso";
} else {
    echo "Erro: ".$conexao->error;
}

$conexao->close();
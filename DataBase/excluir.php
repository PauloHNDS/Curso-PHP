<div class="titulo">Excluir</div>

<?php 

require_once('conexao.php');

$sql = "DELETE FROM CADASTRO WHERE ID = 1";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {   
    echo "Sucesso !!";
} else {
    echo "Error!!";
}

$conexao->close();
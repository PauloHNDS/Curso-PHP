<!--# bootstrap 4 css #-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--# bootstrap 4 css #-->
<div class="titulo">Excluir</div>

<?php 
ini_set('display_errors',0);
require_once("conexao.php");

$sql = "SELECT ID,NOME,NASCIMENTO,EMAIL FROM CADASTRO";

$conexao = novaConexao();

if($_GET['cod']) {
    $excluirSQL = "DELETE FROM CADASTRO WHERE ID = ?";
    $stmnt = $conexao->prepare($excluirSQL);
    $stmnt->bind_param("i",$_GET['cod']);
    $stmnt->execute();
}

$resultado  = $conexao->query($sql);

$registros = [];

if ($resultado->num_rows > 0) {

    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }

} elseif ($conexao->error) {
    echo "Deu errado ".$conexao->$error;
}

$conexao->close();

?>


<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
        <tr>
            <td><?= $registro['ID'] ?></td>
            <td><?= $registro['NOME'] ?></td>
            <td><?= date('d/m/Y', strtotime($registro['NASCIMENTO'])) ?></td>
            <td><?= $registro['EMAIL'] ?></td>
            <td>
                <a href="exercicios.php?dir=DataBase&file=excluir_&cod=<?= $registro['ID'] ?>" class="btn btn-danger">Excluir</a>
                <a href="exercicios.php?dir=DataBase&file=alterar&alterar=<?= $registro['ID'] ?>" class="btn btn-warning">Alterar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1rem;
    }
</style>
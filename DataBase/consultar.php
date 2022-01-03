<!--# bootstrap 4 css #-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--# bootstrap 4 css #-->

<div class="titulo">Consultar</div>

<?php 
//ini_set('display_errors',0);
require_once("conexao.php");

$sql = "SELECT ID,NOME,NASCIMENTO,EMAIL FROM CADASTRO";

$conexao = novaConexao();

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
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
        <tr>
            <td><?= $registro['ID'] ?></td>
            <td><?= $registro['NOME'] ?></td>
            <td><?= date('d/m/Y', strtotime($registro['NASCIMENTO'])) ?></td>
            <td><?= $registro['EMAIL'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
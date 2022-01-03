<!--# bootstrap 4 css #-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--# bootstrap 4 css #-->

<div class="titulo">Alterar registro</div>

<?php 
require_once("conexao.php");
//ini_set('display_errors',0);

$conexao = novaConexao();
$sql;

if($_GET['alterado']) {
    $sql = "UPDATE 'CADASTRO' SET 
            NOME = '?', NASCIMENTO = '?', EMAIL = '?', SITE = '?',FILHOS = '?', SALARIO = '?' 
            WHERE ID = '?' 
            ";
    $stmnt = $conexao->prepare($sql);
    $data = "2003-12-02";
    $dados = [
        $_POST['nome'],
        $data,
        $_POST['email'],
        $_POST['site'],
        $_POST['qtfilho'],
        $_POST['salario']
    ];
    $stmnt->bind_param("ssssii",...$dados);
    $resultado = $stmnt->execute();
    if($resultado) {
        header('Location: exercicios.php?dir=DataBase&file=excluir_');
    } else {
        echo $resultado;
    }
}

if ($_GET['alterar']) {

    $sql = "SELECT NOME,NASCIMENTO,EMAIL,SITE,FILHOS,SALARIO FROM CADASTRO WHERE ID = ?";
    $stmnt = $conexao->prepare($sql);
    $stmnt->bind_param("i",$_GET['alterar']);
    $stmnt->execute();
    $resultado  = $stmnt->get_result();

    $registros = [];

    if ($resultado->num_rows > 0) {

        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif ($conexao->error) {
        echo "Deu errado ".$conexao->$error;
    } 
}


?>

<form action="exercicios.php?dir=DataBase&file=alterar&alterado=1" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nome">Nome: </label> <br>
            <input type="text" name="nome" id="nome"  class="form-control" placeholder="Digite seu nome" value="<?= $registros[0]['NOME'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="nascimento">Nascimento: </label> <br>
            <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="Digite sua data de nascimento" value="<?= $registros[0]['NASCIMENTO'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="email">E-mail: </label> <br>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" value="<?= $registros[0]['EMAIL'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="site">Site: </label> <br>
            <input type="url" name="site" id="site" class="form-control" placeholder="Digite seu site" value="<?= $registros[0]['SITE'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="qtFilhos">Quantos Filhos:</label>
            <input type="number" name="qtfilho" id="qtfilho" class="form-control" placeholder="quantos filhos " value="<?= $registros[0]['FILHOS'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="salario">Salario:</label>
            <input type="number" name="salario" id="salario" class="form-control" placeholder="Digite seu salario" value="<?= $registros[0]['SALARIO'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <button class="btn btn-primary lg">Enviar</button>
    </div>
</form>
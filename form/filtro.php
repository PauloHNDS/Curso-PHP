<?php 
ini_set('display_errors',0);
?>
<!--# bootstrap 4 css #-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--# bootstrap 4 css #-->

<div class="titulo">Filtro</div>
<?php 

    if(count($_POST) > 0) {
        $erros = [];

        if(!filter_input(INPUT_POST,"nome")) {
            $erros['nome'] = '<p class="alert alert-danger">Nome é obrigatorio </p>';
        }
        
        if(filter_input(INPUT_POST,"nascimento")) {
            $data = DateTime::createFromFormat(
                'd/m/Y',$_POST['nascimento']
            );
            if ($data) {
                $erros['nascimento'] = '<p class="alert alert-danger">Data deve estar no padrão dia/mes/ano </p>';
            }
        }

        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $erros['email'] = '<p class="alert alert-danger">Email invalido </p>';
        }

        if(!filter_var($_POST['site'],FILTER_VALIDATE_URL)) {
            $erros['site'] = '<p class="alert alert-danger">url invalida </p>';
        }
        
        $filhos = [
            "options" => ["min_range" => 0, "max_range" => 20]
        ];

        if(!filter_var($_POST['filhos'],FILTER_VALIDATE_INT,$filhos) && $_POST['filhos'] != 0) {
            $erros['filhos'] = '<p class="alert alert-danger">Quantidade de filhos invalido </p>';
        }
        
        $salario = ['options' => ['decimal' => ',']];
        
        if (!filter_var($_POST['salario'],FILTER_VALIDATE_FLOAT,$salario) ) {
            $erros['salario'] = '<p class="alert alert-danger">Salario invalido </p>';
        }
    }
?>
<h2>Cadastro</h2>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nome">Nome: </label> <br>
            <input type="text" name="nome" id="nome"  class="form-control <?= $erros['nome'] ? 'is-invalid' : ''; ?>" placeholder="Digite seu nome" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="nascimento">Nascimento: </label> <br>
            <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="Digite sua data de nascimento" value="<?= $_POST['nascimento'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="email">E-mail: </label> <br>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="site">Site: </label> <br>
            <input type="url" name="site" id="site" class="form-control" placeholder="Digite seu site" value="<?= $_POST['site'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="qtFilhos">Quantos Filhos:</label>
            <input type="number" name="qtfilho" id="qtfilho" class="form-control" placeholder="quantos filhos " value="<?= $_POST['qtfilho'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <div class="form-group col-md-5">
            <label for="salario">Salario:</label>
            <input type="number" name="salario" id="salario" class="form-control" placeholder="Digite seu salario" value="<?= $_POST['salario'] ?>">
        </div>
        <div class="form-group col-md-1">
        <!--espaço entre os inputs -->
        </div>
        <button class="btn btn-primary lg">Enviar</button>
    </div>
</form>
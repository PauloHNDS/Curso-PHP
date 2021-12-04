<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sytle.css">
    <link rel="stylesheet" href="./assets/css/exercicios.css">
    <title>Exercicio</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização do Execício</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?php 
                //include($_GET['dir']."/".$_GET['file'].".php");
                include("{$_GET['dir']}/{$_GET['file']}.php"); 
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R E ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>
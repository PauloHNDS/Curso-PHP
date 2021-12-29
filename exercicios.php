<?php 
    session_start();
    if ($_COOKIE['usuario']) {
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
    }
?>
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
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
        <a href="index.php">Voltar</a>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="./logout.php" class="vermelho">Sair</a>
    </nav>
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
<?php 
session_start();
?>

<p>
    <b>Nome:</b><?= $_SESSION['nome']?> <br>
    <b>Email:</b><?= $_SESSION['email']?>
</p>

<?php 
$_SESSION['email'] = 'SantosPaulo@gamil.com';
ini_set('display errors',0);
?>

<p>
    <a href="http://localhost:8080/CursoPHP/Curso-PHP/exercicios.php?dir=sessao&file=sessao1">voltar</a>
</p>
<p>
    <a href="http://localhost:8080/CursoPHP/Curso-PHP/exercicios.php?dir=sessao&file=sessao3">Limpar Sessão</a>
</p>
<div class="titulo">Sessão</div>

<?php 
session_start();
ini_set('display errors',0);


print_r($_SESSION);
echo "<br>";

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = "Paulo";
}
if (!$_SESSION['email']) {
    $_SESSION['email'] = "PauloSantos@gmail.com";
}

?>

<a href="http://localhost:8080/CursoPHP/Curso-PHP/exercicios.php?dir=sessao&file=sessao2">alterar</a>

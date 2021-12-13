<div class="titulo">$_POST</div>

<form action="#" method="post">

    <ul>
    <li><label for="nome">Nome:</label> <input type="text" name="nome" id="nome"></li>
    <li><label for="sobrenome">Sobrenome:</label> <input type="text" name="sobrenome" id="sobrenome"></li>
    <li><button>Enviar</button></li>
    </ul>
</form>

<?php 

print_r($_POST);

?>

<style>
    form ul {
        list-style: none;
    }
</style>
<div class="titulo">Insert PDO</div>

<?php 

    require_once "conexao_.php";

    $sql = "INSERT INTO CADASTRO 
    (NOME,EMAIL,NASCIMENTO,SITE,FILHOS,SALARIO)
    VALUES 
    (
        'GUILHERME JOGER',
        'GUI@GMAIL.COM',
        '1998-07-27',
        'HTTPS://GUI.COM.BR',
        0,
        3000
    );";

    $conexao = novaConexao();

    //print_r(get_class_methods($conexao));

    if(!$conexao->exec($sql)) {
        $id = $conexao->lastInsertId();
        echo "Novo cadastro com o $id";
    } else {
        echo $conexao->errorCode();
    }
?>
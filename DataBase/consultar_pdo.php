<div class="titulo">PDO: Consultar</div>

<?php 

    require_once "conexao_.php";

    $conexao = novaConexao();

    $sql = "SELECT * FROM CADASTRO";

    $resultado = $conexao->query($sql)->fetchAll();

    print_r($resultado);

    echo "<hr>";
    
    $sql = "SELECT * FROM CADASTRO LIMIT :quantidade OFFSET :inicio";
    
    $stmt = $conexao->prepare($sql);
    
    $stmt->bindValue(':quantidade',2,PDO::PARAM_INT);
    $stmt->bindValue(':inicio',3,PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        $resultado = $stmt->fetchAll();
        print_r($resultado);
    }
    

    $conexao->close();
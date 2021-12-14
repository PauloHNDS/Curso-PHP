<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="coluna">Coluna:</label>
        <input type="number" name="coluna" id="coluna">
    </div>
    <div>
        <label for="linha">Linha:</label>
        <input type="number" name="linha" id="tabela">
    </div>
    <input type="submit" value="Gerar Tabela">
</form>

<?php 

$coluna = $_POST['coluna'] ?? 0;
$linha = $_POST['linha'] ?? 0;
$valor = 1;
if ($coluna > 0 && $linha > 0) {
echo "<table>";
for ($i = 1; $i <= $coluna; $i++) {
    echo "<tr>";
    for($j = 1; $j <= $linha; $j++) {
        if ($valor % 2 === 0) {
            echo "<td azul>{$valor}</td>";
        } else {
            echo "<td vermelho>{$valor}</td>";
        }
        $valor++;
    }
    echo "</tr>";
}
echo "</table>";
}
?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
        border: 1px solid #444;
    }
    [vermelho] {
        background-color: #ff2e63;
        color: #eaeaea;
    }
    [azul] {
        background-color: #08d9d6;
        color: #252a34;
    }
</style>

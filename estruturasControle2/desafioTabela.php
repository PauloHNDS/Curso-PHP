<div class="titulo">Desafio Tabela</div>

<?php 

    $matriz = [
        [1,2,3,4,5],
        [6,7,8,9,10],
        [11,12,13,14,15],
        [16,17,18,19,20]
    ];
    echo "<table>";
    foreach ($matriz as $key) {
        echo "<tr>";
        foreach ($key as $value) {
            if ($value % 2 === 0) {
                echo "<td azul>{$value}</td>";
            } else {
                echo "<td vermelho>{$value}</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
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
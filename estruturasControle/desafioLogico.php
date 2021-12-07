<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">

    <div>
        <label for="t1">Trabalho Terça-feira:</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho Quinta-feira:</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<?php 

    if ((isset($_POST['t1']) && (isset($_POST['t2'])) ) ) {

        $trabalhoTerca = $_POST['t1'] == '1' ? true : false;
        $trabalhoQuinta = $_POST['t2'] == '1' ? true : false;

      if ($trabalhoTerca && $trabalhoQuinta) {
        echo "TV 50 polegadas e Sorvete";
    } elseif ($trabalhoQuinta || $trabalhoTerca) {
        echo "TV 32 polegadas e Sorvete";
    } else {
        echo "Ficar em casa, mais saudavel!!";
    }  
    }
?>

<style>

    button, select {
        font-size: 1.8rem;
    }

</style>
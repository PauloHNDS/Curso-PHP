<div class="titulo">Operadores Relacionais</div>

<?php 

    var_dump(1 == 1);
    echo '<br>';
    var_dump(1 > 1);
    echo '<br>';
    var_dump(1 >= 1);
    echo '<br>';
    var_dump(4 < 23);
    echo '<br>';
    var_dump(1 <= 7);
    echo '<br>';
    var_dump(1 != 1);
    echo '<br>';
    var_dump(1 <> 1);
    echo '<br>';

    var_dump(111 == '111');
    echo '<br>';
    var_dump(111 === '111');
    echo '<br>';
    var_dump(111 != '111');
    echo '<br>';
    var_dump(111 !== '111');

    echo "<p> Spaceship </p> <hr>";

    var_dump(400 <=> 3);
    echo '<br>';
    var_dump(50 <=> 50);
    echo '<br>';
    var_dump(5 <=> 50);
    echo '<br>';
?>

<style>
    p {
        margin-bottom: 0px;
    }
    hr {
        margin-top: 0px;
    }
</style>
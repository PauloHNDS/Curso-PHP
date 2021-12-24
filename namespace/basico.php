<?php namespace contexto; ?>

<div class="titulo">Basico de namespace</div>

<?php 

    echo __NAMESPACE__. "<br>";
    const CONSTANTE1 = 123;

    define('contexto\CONSTANTE2',234);
    define(__NAMESPACE__.'\CONSTANTE3',345);
    define('outro_contexto\constante4', 456);

    echo CONSTANTE1.'<br>';
    echo CONSTANTE2.'<br>';
    echo \contexto\CONSTANTE3.'<br>';
    //echo constant(__NAMESPACE__.'\constante3').'<br>';
    echo \outro_contexto\constante4.'<br>';

    function soma($a,$b) {
        return $a + $b;
    }

    echo soma(1,2).'<br>';
    echo \contexto\soma(3,3).'<br>';
    
    function strpos($str,$text) {
        echo "buscando string {$text} em {$str} <br>";
        return 1;
    }

    echo strpos('Bom dia ', 'dia');
    echo \strpos('Bom dia ', 'dia');

?>
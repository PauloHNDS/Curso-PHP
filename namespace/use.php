<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php 

    echo __NAMESPACE__.'<br>';
    require_once('use_arquivo.php');

    function soma($a , $b) {
        return $a . $b ;
    }

    class Classe {
        public $var;

        function func() {
            echo __NAMESPACE__. " -> " . __CLASS__ . " -> " . __METHOD__ . '<br>';
        }
    }
    
    echo \Nome\Bem\Grande\constante."<br>";

    use const \Nome\Bem\Grande\constante;

    echo constante."<br>";

    use Nome\Bem\Grande as ctx;

    echo ctx\soma(3,1)."<br>";

    use function Nome\Bem\Grande\soma as somaReal;
    echo somaReal(3,5)."<br>";

?>
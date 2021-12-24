<div class="titulo">Try e  Catch</div>

<?php 


try {
    echo intdiv(7,0).'<br>';
} catch (Error $error) {
    echo "deu error <br>";
}

try {
    throw new Exception("teve error");
    echo intdiv(7,0).'<br>';
} catch (DivisionByZeroError $e) {
    echo "Deu errado <br> ".$e->getMessage()."<br>";
} catch (Throwable $e) {
    echo "Deu errado <br>".$e->getMessage()."<br>";
} finally {
    echo "Acabou o try";
}
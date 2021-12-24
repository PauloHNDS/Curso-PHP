<div class="titulo">Errors personalizados</div>

<?php  

    class FaixaEtariaExeption extends Exception {

        public function     __construct( $message , $code = 0 , $previus = null){
            echo  "erros personalizados".$message."<br>";
            parent::__construct($message, $code,$previus);
        }
    }

    function calcularTempoAposentadoria($idade) {
        if($idade < 18) {
            throw new FaixaEtariaExeption("ainda está muito longe");
        }

        if($idade > 70) {
            throw new FaixaEtariaExeption("Já deveria estar aposentado nessa idade");
        }
        return 70 - $idade;
    }

    $idades = [15,25,35,70,80,45,10,65];

    foreach ($idades as $key => $idade) {
        try {
            $tempoRestante = calcularTempoAposentadoria($idade);
            echo "Idade: $idade, $tempoRestante anos retantes <br>";
        } catch (FaixaEtariaExeption $error) {
            echo "Não foi possivel calcular a idade $idade anos. <br>";
            echo "Motivo: {$error->getMessage()}. <br>";
        }
    }
?>
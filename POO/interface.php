<div class="titulo">Interface</div>

<?php 

    interface animal {
        function respirar();

    }

    interface Canino {
        function latir() : string;
    }

    class Cachorro implements animal,Canino {

        function respirar(){
            return "Estou respirando ops, au au au au au au au au au <br>";    
        }
        function latir(): string {
            return "au au au <br> ";
        }
    }

    $animal = new Cachorro();
    echo $animal->respirar();
    echo $animal->latir();
?>
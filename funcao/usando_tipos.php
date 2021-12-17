<div class="titulo">Usando Tipos</div>

<?php 

    function somar1($number1,$number2){
        echo "<span> Somando $number1 + $number2  = </span>";
        return $number1 + $number2;
    }

    echo somar1(4,5);

    function somar2(int $number1,int $number2){
        echo "<span> Somando $number1 + $number2  = </span>";
        return $number1 + $number2;
    }  

    echo '<br>';
    
    echo somar2(5,5);
    
    function somar3($number1,$number2): int{
        echo "<span> Somando $number1 + $number2  = </span>";
        return $number1 + $number2;
    } 
    echo '<br>';

    echo somar3(5.5 , 6.9);
    
?>
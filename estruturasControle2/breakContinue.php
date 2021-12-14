<div class="titulo">Break Continue</div>

<?php 

    $count = 10;
    for (;;) { 
        echo "$count <br>";
        $count++;
        if ($count > 20) {
            break;
        }
    }
    echo "FIM !!!!!";

    echo "<br> <hr>";

    for (;;) { 
        $count++;
        if ($count % 2 === 1) {
            continue;
        }
        echo "$count <br>";
        if ($count >= 30) {
            break;
        }
    }

?>
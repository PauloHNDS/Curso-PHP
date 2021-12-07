<div class="titulo">Operadores logicos</div>

<?php

    var_dump(true);
    echo("<br>");
    var_dump(!true);
    echo "<br>";

    echo "<strong> Tabela Verdadeiro 'AND' (E) <br> <hr> </strong>";

    echo ("TRUE AND TRUE = ". (true && true ? "TRUE" : "FALSE")."<br>");
    echo ("TRUE AND FALSE = ". (true && false ? "TRUE" : "FALSE")."<br>");
    echo ("FALSE AND FALSE = ". (false && false ? "TRUE" : "FALSE")."<br>");

    echo "<strong> Tabela verdadeiro 'OR' (OU) </strong> <br> <hr> ";

    echo ("TRUE OR TRUE = ". (true || true ? "TRUE" : "FALSE")."<br>");
    echo ("TRUE OR FALSE = ". (true || false ? "TRUE" : "FALSE")."<br>");
    echo ("FALSE OR FALSE = ". (false || false ? "TRUE" : "FALSE")."<br>");    

    echo "<strong> Tabela verdadeiro 'XOR' (Ou exlusivo) </strong> <br> <hr> ";
    echo ("TRUE OR TRUE = ". (true != true ? "TRUE" : "FALSE")."<br>");
    echo ("TRUE OR FALSE = ". (true != false ? "TRUE" : "FALSE")."<br>");
    echo ("FALSE OR FALSE = ". (false != false ? "TRUE" : "FALSE")."<br>");
?>
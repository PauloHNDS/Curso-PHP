<div class="titulo">String</div>

<?php 
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump('Eu também');
    echo '<br>';

    echo ("<b><p> Coctenação</p></b>");
    echo "Nós também "."Somos "."Uma "."String";
    echo "<p>"," Eu ", "Também "," Aceito "," Assim","</p>";

    echo '<b><p> Algumas Funções </p></b>';
    echo strtoupper("maximizado")."<br>";
    echo strtolower("MINIMIZADO")."<br>";
    echo ucfirst('só a primeira letra')."<br>";
    echo ucwords('todas as palavras').'<br>';
    echo strlen("quantas palavras tem aqui?").'<br>';
    echo mb_strlen("quantas palavras tem aqui?","utf-8").'<br>';
    echo substr('Só uma parte da string', 7,6);

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sytle.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>01. Introdução</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=teste&file=teste">Hello world</a></li>
                        <li><a href="exercicios.php?dir=basic&file=ola">ola PHP</a></li>
                        <li><a href="exercicios.php?dir=basic&file=html">Integração HTML</a></li>
                        <li><a href="exercicios.php?dir=basic&file=css">Integração CSS</a></li>
                        <li><a href="exercicios.php?dir=basic&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicios.php?dir=basic&file=desafio">desafio 1</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>02. Tipos primitivos</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=tipos&file=int">int</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=float">float</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=aritmeticas">aritmeticas</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=desafio_aritmetica">Desafio Precendência</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=string">String</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=DesafioString"> Desafio String</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=boolean"> boolean</a></li>
                        <li><a href="exercicios.php?dir=tipos&file=conversion"> Conversão</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>03. Variaveis</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=basico">Basico</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=atribuicao">Atribuicao</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=interpolacao">Interpalação</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=variaveisVariaveis">variaveis de variaveis</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=desafioVariaveis">Desafio variaveis</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=valorReferencia">Valor & Referência</a></li>
                        <li><a href="exercicios.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>04. Estruturas de controler</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=estruturasControle&file=if_else">IF_ELSE</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=operadoresRelacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=desafioPI">Desafio PI</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=operadoresLogicos">Operadores Logicos</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=desafioLogico">Desafio Logico</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=switch">Switch</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle&file=DesafioSwitch">Desafio switch</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R E ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>
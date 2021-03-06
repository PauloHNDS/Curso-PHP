<?php 
    session_start();
    if ($_COOKIE['usuario']) {
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }

    if(!$_SESSION['usuario']) {
        header('Location: login.php');
    }
?>

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
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
        <a href="./logout.php">Sair</a>
    </nav>
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
                <div class="modulo laranja">
                    <h3>05. Array</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=array&file=basico">Basico</a></li>
                        <li><a href="exercicios.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicios.php?dir=array&file=desafioIndex">Desafio Index</a></li>
                        <li><a href="exercicios.php?dir=array&file=DesafioMeses">DesafioMeses</a></li>
                        <li><a href="exercicios.php?dir=array&file=operacao">Operações</a></li>
                        <li><a href="exercicios.php?dir=array&file=DesafioSorteio">DesafioSorteio</a></li>
                        <li><a href="exercicios.php?dir=array&file=arrayMulti">array Multi</a></li>
                        <li><a href="exercicios.php?dir=array&file=constArray">Array constantes</a></li>
                        <li><a href="exercicios.php?dir=array&file=get">$_GET</a></li>
                        <li><a href="exercicios.php?dir=array&file=post">$_POST</a></li>
                        <li><a href="exercicios.php?dir=array&file=comparacao">Comparação</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>06. Estruturas De Controller 2</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=for">Laço for</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=desafioFor">Desafio for</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=foreach">Foreach</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=breakContinue">Break Continue</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=desafio_impressao">Desafio impressao</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=while_dowhile">while / do_while</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=desafioTabela">Desafio Tabela</a></li>
                        <li><a href="exercicios.php?dir=estruturasControle2&file=desafioTabela2">Desafio Tabela</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>07. Função</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=funcao&file=escopo">Função e escopo</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=args_retorno">Argumentos e Retorno</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=args_variaveis">Argumentos e Variaveis</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=args_padrao">Argumentos Padrão</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=usando_tipos">Usando Tipo padrão</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=anonima">Anonima</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=Closure_callable">Closure e Callable</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=retornandoFuncao">Retornando função</a></li>
                        <li><a href="exercicios.php?dir=funcao&file=mapFilter">Map e Filter</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>08. POO</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=POO&file=Classe">Classe</a></li>
                        <li><a href="exercicios.php?dir=POO&file=construtor">Construtor e Destrutor</a></li>
                        <li><a href="exercicios.php?dir=POO&file=heranca">Henraça</a></li>
                        <li><a href="exercicios.php?dir=POO&file=Visibilidade">Visibilidade</a></li>
                        <li><a href="exercicios.php?dir=POO&file=Static">Static</a></li>
                        <li><a href="exercicios.php?dir=POO&file=interface">Interface</a></li>
                        <li><a href="exercicios.php?dir=POO&file=classeAbstrata">classe Abstrata</a></li>
                        <li><a href="exercicios.php?dir=POO&file=final">Final</a></li>
                        <li><a href="exercicios.php?dir=POO&file=traits">traits</a></li>
                        <li><a href="exercicios.php?dir=POO&file=MetodosMagicos">Metodos e Magicos</a></li>
                        <li><a href="exercicios.php?dir=POO&file=polimorfismo">Polimorfismo</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>09. Include</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=include&file=include">Include</a></li>
                        <li><a href="exercicios.php?dir=include&file=include_funcao">Include em função</a></li>
                        <li><a href="exercicios.php?dir=include&file=include_require">Include Vs Require</a></li>
                        <li><a href="exercicios.php?dir=include&file=require_return">Require com return</a></li>
                        <li><a href="exercicios.php?dir=include&file=include_once">Include once</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>10. Namespace</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=namespace&file=basico">Basico</a></li>
                        <li><a href="exercicios.php?dir=namespace&file=sub">Sub</a></li>
                        <li><a href="exercicios.php?dir=namespace&file=use">Use</a></li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>11. Tratamento de error</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=tratamentoError&file=tryCatch">Try e Catch</a></li>
                        <li><a href="exercicios.php?dir=tratamentoError&file=errorsPersonalizados">Erros personalizados</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>12. Sessão e Cookie</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=sessao&file=sessao1">Sessão </a></li>
                        <li><a href="exercicios.php?dir=sessao&file=gerenciandoSessao">Gerenciado de Sessão</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>13. API</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=API&file=date">Datas</a></li>
                        <li><a href="exercicios.php?dir=API&file=dateTime">DateTime</a></li>
                        <li><a href="exercicios.php?dir=API&file=upload">upload</a></li>
                        <li><a href="exercicios.php?dir=API&file=download">download</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>14. Formulario</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=form&file=filtro">Filtros</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>15. DataBase</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=DataBase&file=criar_banco">Criando um banco de dados</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=criar_tabela">Criando tabela</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=inserir">Inserir</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=consultar">Consultar</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=excluir">Excluir</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=excluir_">Excluir_</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=incluir_">Incluir</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=insert_pdo">Inserir PDO</a></li>
                        <li><a href="exercicios.php?dir=DataBase&file=consultar_pdo">consultar PDO</a></li>
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
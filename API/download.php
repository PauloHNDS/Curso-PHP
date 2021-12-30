<div class="titulo">Download e upload</div>

<?php 
ini_set('display_errors',0);
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '\image\ ';
$nomeArquivo = $_FILES['arquivos']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
    if (move_uploaded_file($tmp,$arquivo)) {
        echo '<p sytle="verde"> Arquivo enviado com sucesso !!! </p> ';
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    } else{
        echo '<p class="vermelho"> Arquivo não pode ser enviado!!! </p> ';
    } 
?>

<form action="#" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" name="arquivo" id="arquivo">
    </div>
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo): ?>
        <li>
            <a href="./image/<?= $arquivo ?>"> <?= $arquivo ?></a>
        </li>
    <?php endforeach; ?>
</ul>


<style>
    input,button {
        font-size: 2rem;
    }

    .vermelho {
        color: red;
    }
    .verde {
        color:green;
    }
</style>
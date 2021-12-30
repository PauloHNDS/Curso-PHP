<div class="titulo">Upload Arquivos</div>

<?php 
print_r($_FILES);
print_r(__DIR__);
if($_FILES && $_FILES['arquivo']){
    $pastaUpload = __DIR__ . '\image\ ';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    
    if(move_uploaded_file($tmp,$arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "Erro ao enviar arquivo";
    }
}
?>

<form action="#" method="POST" enctype="multipart/form-data">
    <div>
        <input type="file" name="arquivo" id="arquivo">
    </div>
    <button>enviar</button>
</form>

<style>
    input,button {
        font-size: 1.2rem;
    }
</style>
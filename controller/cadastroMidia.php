<?php
include('../classe/midia.php');
// include('../classe/usuario.php');
// include('../classe/projeto.php');

if(isset($_POST)){
    extract($_POST); //descricao, video, imagem1, imagem2
    extract($_FILES);
    if ($_FILES["video"]["error"] === UPLOAD_ERR_OK) {

        $video = $_FILES["video"];

        $nomeArquivo = $_FILES["video"]["name"];
        $tipoArquivo = $_FILES["video"]["type"];
        $dadosArquivo = file_get_contents($_FILES["video"]["tmp_name"]); // Lê o arquivo binário

        CriarMidia(addslashes(file_get_contents($_FILES["video"]["tmp_name"])), 'video muito brabo', 1);
    }

    if($_FILES["imagem1"] != null){
        CriarMidia(addslashes(file_get_contents($_FILES["imagem1"]["tmp_name"])), 'imagem 1 muito braba', 1);
    }
    
    if($_FILES["imagem2"] != null){
        CriarMidia(addslashes(file_get_contents($_FILES["imagem2"]["tmp_name"])), 'imagem 2 muito braba', 1);
    }

    header('Location: '.'../html/Projeto_proprietario.html');
}

?>
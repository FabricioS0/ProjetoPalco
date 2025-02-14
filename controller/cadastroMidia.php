<?php
include('../classe/midia.php');
include('../classe/projeto.php');

if(isset($_POST)){
    extract($_POST); //descricao, video, imagem1, imagem2
    extract($_FILES);
    if($_GET['ProjetoId'] == null){
        header('Location: '.'../html/pag_Perfil.php');
    }else{
        if ($_FILES["video"]["error"] === UPLOAD_ERR_OK) {
            $video = $_FILES["video"];
            $nomeArquivo = $_FILES["video"]["name"];
            $tipoArquivo = $_FILES["video"]["type"];
            $dadosArquivo = file_get_contents($_FILES["video"]["tmp_name"]); // Lê o arquivo binário
    
            CriarMidia(addslashes(file_get_contents($_FILES["video"]["tmp_name"])), 'video muito brabo', $_GET['ProjetoId'], 'video');
        }
    
        if($_FILES["imagem1"]["tmp_name"] != null){
            CriarMidia(addslashes(file_get_contents($_FILES["imagem1"]["tmp_name"])), 'imagem 1 muito braba', $_GET['ProjetoId'], 'image');
        }
        
        if($_FILES["imagem2"]["tmp_name"] != null){
            CriarMidia(addslashes(file_get_contents($_FILES["imagem2"]["tmp_name"])), 'imagem 2 muito braba', $_GET['ProjetoId'], 'image');
        }

        AdicionaDescricaoProjeto($descricao, $_GET['ProjetoId']);
    
        header('Location: '.'../html/Projeto_proprietario.php?projetoId='.$_GET['ProjetoId']);
    }
}

?>
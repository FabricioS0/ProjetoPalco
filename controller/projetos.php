<?php
include('../classe/projeto.php');
include('../classe/midia.php');
include('../classe/usuario.php');

function pesquisarProjetos(){
    if(empty($_GET)){
        $projetos = PesquisaTodos();
    }else{
        if($_GET['nome']!=null){
            $projetos = PesquisaPorNome($_GET['nome']);
        }else{
            $projetos = PesquisaTodos();
        }
    }
    return $projetos;
}

function pesquisarPrimeriaImagem($projetoId){
    $midias = PesquisarMidiaPorProjetoId($projetoId);
    foreach($midias as $midia){
        if($midia['TipoArquivo']=='image'){
            return $midia;
        }
    }
}

function VerificaLogado(){
    return VerificaCookieLoginUsuario();
}
?>
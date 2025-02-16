<?php
include('../classe/projeto.php');
include('../classe/midia.php');
include('../classe/usuario.php');

function PesquisaTodosProjetos(){
    return PesquisaTodos();
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
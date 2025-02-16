<?php
include('../classe/usuario.php');
include('../classe/projeto.php');
include('../classe/midia.php');

function VerificaLogadoCookies(){
    if(!VerificaCookieLoginUsuario()){
        header('Location: '.'../html/login.php');
    }
}

function VerificaLogado(){
    return VerificaCookieLoginUsuario();
}

function RetornaUsuarioLogado(){
    VerificaLogadoCookies();
    return PesquisaUsuarioId(RetornaUsuarioLogadoCookie());
}

function PesquisaProjetosPorUsuario($usuarioId){
    return PesquisaPorUsuario($usuarioId);
}

function pesquisarPrimeriaImagem($projetoId){
    $midias = PesquisarMidiaPorProjetoId($projetoId);
    foreach($midias as $midia){
        if($midia['TipoArquivo']=='image'){
            return $midia;
        }
    }
}
?>
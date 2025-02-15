<?php
include('../classe/usuario.php');
include('../classe/projeto.php');

function VerificaLogadoCookies(){
    if(!VerificaCookieLoginUsuario()){
        header('Location: '.'../html/login.php');
    }
}

function RetornaUsuarioLogado(){
    VerificaLogadoCookies();
    return PesquisaUsuarioId(RetornaUsuarioLogadoCookie());
}

function PesquisaProjetosPorUsuario($usuarioId){
    return PesquisaPorUsuario($usuarioId);
}
?>
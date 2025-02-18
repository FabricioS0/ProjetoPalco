<?php
include('../classe/projeto.php');
include('../classe/usuario.php');
include('../classe/recompensa.php');
include('../classe/midia.php');

function VerificaLogin(){
    if(!VerificaCookieLoginUsuario()){
        header('Location: '.'../html/login.php');
    }
}

function VerificaLogado(){
    return VerificaCookieLoginUsuario();
}

function VerificaProjetoUsuario($usuarioId){
    if(RetornaUsuarioLogadoCookie() != $usuarioId){
        header('Location: '.'../html/Projeto.php?projetoId='.$_GET['projetoId']);
    }
}

function PesquisaDadosProjeto($projetoId){
    VerificaLogin();
    $projeto = PesquisaPorId($projetoId);
    if(RetornaUsuarioLogadoCookie() != $projeto['UsuarioIDFK']){
        header('Location: '.'../html/pag_Perfil.php');
    }
    return $projeto;
}

function PesquisarRecompensas($projetoId){
    return PesquisaRecompensaPorProjetoId($projetoId);
}

function PesquisarMidias($projetoId){
    return PesquisarMidiaPorProjetoId($projetoId);
}
?>
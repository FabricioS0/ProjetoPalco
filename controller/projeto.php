<?php
include('../classe/projeto.php');
include('../classe/recompensa.php');
include('../classe/midia.php');
include('../classe/usuario.php');

function pesquisarProjeto($projetoId){
    return PesquisaPorId($projetoId);
}

function PesquisarRecompensas($projetoId){
    return PesquisaRecompensaPorProjetoId($projetoId);
}

function VerificaLogado(){
    return VerificaCookieLoginUsuario();
}

function RetornaUsuarioProjeto($usuarioId){
    return PesquisaUsuarioId($usuarioId);
}

function PesquisarMidias($projetoId){
    return PesquisarMidiaPorProjetoId($projetoId);
}
?>
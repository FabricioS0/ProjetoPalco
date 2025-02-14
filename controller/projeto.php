<?php
include('../classe/projeto.php');
include('../classe/recompensa.php');
include('../classe/midia.php');

function pesquisarProjeto($projetoId){
    return PesquisaPorId($projetoId);
}

function PesquisarRecompensas($projetoId){
    return PesquisaRecompensaPorProjetoId($projetoId);
}

function PesquisarMidias($projetoId){
    return PesquisarMidiaPorProjetoId($projetoId);
}
?>
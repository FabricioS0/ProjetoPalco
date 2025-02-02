<?php

function CriarProjeto($nome, $resumo, $valor, $datafim, $usuarioId){
    $query = "insert into bd_projpalco.projeto(Nome, Resumo, ValorMeta, Publico, DataFim, UsuarioIDFK, DataCriacao) 
    values('".$nome."','".$resumo."',".$valor.",false,'".$datafim."',".$usuarioId.",current_date())";
    $resultado = executaQuery($query);
    //return $resultado;
}

function AdicionaDescricaoProjeto($descricao, $projetoId){
    $query = "update bd_projpalco.Projeto
    set Descricao = '".$descricao."'
    where ProjetoID = ".$projetoId;
    ExecutaQuery($query);
}

function PesquisaTodos(){
    $query = "select * from  bd_projpalco.projeto";
    $resultado = executaQuery($query);
    return $resultado;
}

function PesquisaPorId($id){
    $query = "select * from  bd_projpalco.projeto where projetoid = "+$id;
    $resultado = executaQuery($query);
    return $resultado;
}

function PesquisaPorNome($nome){
    $query = "select * from  bd_projpalco.projeto where nome = '"+$nome+"'";
    $resultado = executaQuery($query);
    return $resultado;
}

function PesquisaPorUsuario($usuarioId){
    $query = "select * from  bd_projpalco.projeto where UsuarioIDFK = "+$usuarioId;
    $resultado = executaQuery($query);
    return $resultado;
}

function AlteraProjeto($nome, $resumo, $valor, $datafim, $projetoId){
    $query = "update bd_projpalco.Projeto
    set Nome =  '".$nome."'
    , Resumo = '".$resumo."'
    , Valor = ".$valor."
    , DataFim = '".$datafim."'
    where ProjetoID = ".$projetoId;
    ExecutaQuery($query);
}

function DeletaProjeto($projetoId){
    $query = "delete from bd_projpalco.Projeto where ProjetoIDFK = ".$projetoId;
    ExecutaQuery($query);
}

function ExecutaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
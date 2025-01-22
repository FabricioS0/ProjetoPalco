<?php

function CriarProjeto($nome, $descricao, $valor, $datafim, $usuarioId){
    $query = "insert into bd_projpalco.projeto(Nome, Descricao, ValorMeta, Publico, DataFim, UsuarioIDFK, DataCriacao) 
    values('".$nome."','".$descricao."',".$valor.",false,'".$datafim."',".$usuarioId.",current_date())";
    $resultado = executaQuery($query);
    //return $resultado;
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

function ExecutaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
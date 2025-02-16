<?php

function CriarProjeto($nome, $resumo, $valor, $datafim, $usuarioId){
    $query = "insert into bd_projpalco.Projeto(Nome, Resumo, ValorMeta, Publico, DataFim, UsuarioIDFK, DataCriacao) 
    values('".$nome."','".$resumo."',".$valor.",false,'".$datafim."',".$usuarioId.",current_date())";
    $resultado = ExecutaQueryProjeto($query);
}

function AdicionaDescricaoProjeto($descricao, $projetoId){
    $query = "update bd_projpalco.Projeto
    set Descricao = '".$descricao."'
    where ProjetoID = ".$projetoId;
    ExecutaQueryProjeto($query);
}

function PublicarProjeto($projetoId){
    $query = "update bd_projpalco.Projeto set Publico = True where ProjetoID=".$projetoId;
    $resultado = ExecutaQueryProjeto($query);
}

function PrivarProjeto($projetoId){
    $query = "update bd_projpalco.Projeto set Publico = False where ProjetoID=".$projetoId;
    $resultado = ExecutaQueryProjeto($query);
}

function PesquisaTodos(){
    $query = "select * from  bd_projpalco.Projeto";
    $resultado = ExecutaQueryProjeto($query);
    return $resultado;
}

function PesquisaPorId($id){
    $query = "select * from  bd_projpalco.Projeto where projetoid = ".$id;
    $resultado = ExecutaQueryProjeto($query);
    foreach($resultado as $item){
        return $item;
    }
}

function PesquisaPorNome($nome){
    $query = "select * from  bd_projpalco.Projeto where nome like '%".$nome."%'";
    $resultado = ExecutaQueryProjeto($query);
    return $resultado;
}

function PesquisaPorUsuario($usuarioId){
    $query = "select * from  bd_projpalco.Projeto where UsuarioIDFK = ".$usuarioId;
    $resultado = ExecutaQueryProjeto($query);
    return $resultado;
}

function AlteraProjeto($nome, $resumo, $valor, $datafim, $projetoId){
    $query = "update bd_projpalco.Projeto
    set Nome =  '".$nome."'
    , Resumo = '".$resumo."'
    , Valor = ".$valor."
    , DataFim = '".$datafim."'
    where ProjetoID = ".$projetoId;
    ExecutaQueryProjeto($query);
}

function DeletaProjeto($projetoId){
    $query = "delete from bd_projpalco.Projeto where ProjetoIDFK = ".$projetoId;
    ExecutaQueryProjeto($query);
}

function ExecutaQueryProjeto($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
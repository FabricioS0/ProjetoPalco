<?php

function CriarRecompensa($descricao, $valor, $projetoid){
    $query = "insert into bd_projpalco.recompensa(Descricao, Valor, ProjetoIDFK, DataCriacao) 
    values('".$descricao."',".$valor.",".$projetoid.", current_date())"; 
    $resultado = ExecutaQuery($query);
}

function AlteraRecompensa($recompensaId, $descricao, $valor){
    $query = "update bd_projpalco.Recompensa set
    Descricao = '".$descricao."'
    , Valor = ".$valor."
    , DataAlteracao = current_date())  
    where RecompensaIDFK = ".$recompensaId; 
    $resultado = ExecutaQuery($query);
}

function DeletaRecompensa($recompensaId){
    $query = "delete from bd_projpalco.Recompensa where RecompensaID = ".$recompensaId;
    ExecutaQuery($query);
}

function PesquisaRecompensaPorProjetoId($projetoId){
    $query = "select * from bd_projpalco.Recompensa where ProjetoIDFK = ".$projetoId; 
    $resultado = ExecutaQuery($query);
    return $resultado;
}

function ExecutaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
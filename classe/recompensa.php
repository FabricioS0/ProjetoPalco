<?php

function CriarRecompensa($descricao, $valor, $projetoid){
    $query = "insert into bd_projpalco.Recompensa(Descricao, Valor, ProjetoIDFK, DataCriacao) 
    values('".$descricao."',".$valor.",".$projetoid.", current_date())"; 
    $resultado = ExecutaQueryRecompensa($query);
}

function AlteraRecompensa($recompensaId, $descricao, $valor){
    $query = "update bd_projpalco.Recompensa set
    Descricao = '".$descricao."'
    , Valor = ".$valor."
    , DataAlteracao = current_date())  
    where RecompensaIDFK = ".$recompensaId; 
    $resultado = ExecutaQueryRecompensa($query);
}

function DeletaRecompensa($recompensaId){
    $query = "delete from bd_projpalco.Recompensa where RecompensaID = ".$recompensaId;
    ExecutaQueryRecompensa($query);
}

function PesquisaRecompensaPorProjetoId($projetoId){
    $query = "select * from bd_projpalco.Recompensa where ProjetoIDFK = ".$projetoId; 
    $resultado = ExecutaQueryRecompensa($query);
    return $resultado;
}

function ExecutaQueryRecompensa($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
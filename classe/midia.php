<?php

function PesquisarMidiaPorProjetoId($projetoId){
    $query = "select * from bd_projpalco.Midia  
    where ProjetoIDFK = " . $projetoId;
    return ExecutaQueryMidia($query);
}

function CriarMidia($arquivo, $descricao, $projetoId){    
    $query = "insert into bd_projpalco.Midia(Arquivo, Descricao, ProjetoIDFK, DataCriacao) 
    values('".$arquivo."','".$descricao."',".$projetoId.",current_date())";
    $resultado = ExecutaQueryMidia($query);
}

function DeletaMidia($midiaId){    
    $query = "delete from bd_projpalco.Midia 
    where MidiaID=".$midiaId;
    $resultado = ExecutaQueryMidia($query);
}

function ExecutaQueryMidia($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
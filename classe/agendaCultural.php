<?php


function PesquisaTodosEventos(){
    $query = "select * from  bd_projpalco.AgendaCultural";
    $resultado = ExecutaQueryAgendaCultural($query);
    if(ContaQuantidadeAgendaCultural($resultado)==0){
        return null;
    }
    return $resultado;
}

function ContaQuantidadeAgendaCultural($eventos){
    $i=0;
    foreach($eventos as $evento){
        $i++;
    }
    return $i;
}

function ExecutaQueryAgendaCultural($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

?>
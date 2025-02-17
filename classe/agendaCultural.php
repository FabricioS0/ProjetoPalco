<?php


function PesquisaTodosEventos(){
    $query = "select * from  bd_projpalco.AgendaCultural";
    $resultado = ExecutaQueryAgendaCultural($query);
    return $resultado;
}

function ExecutaQueryAgendaCultural($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

?>
<?php

function PesquisaTodos(){
    $query = "select * from  bd_projpalco.Usuario";
    $resultado = executaQuery($query);
    // while($usuario = mysqli_fetch_assoc($resultado)){
    //     var_dump($usuario);
    // }
    return $resultado;
}

function PesquisaUsuarioId($id){

}

function PesquisaUsuarioNome($nome){

}

function PesquisaUsuarioEmail($email){
    $query = "select * from  bd_projpalco.Usuario where email = '".$email."'";
    $resultado = executaQuery($query);
    return $resultado->fetch_assoc();
}

function ExecutaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
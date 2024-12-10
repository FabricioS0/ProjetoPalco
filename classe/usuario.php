<?php
function pesquisaUsuarioId($id){

}

function PesquisaUsuarioNome($nome){

}

function PesquisarUsuarioCidade($cidade){
    $query = "select * from  bd_projpalco.Usuario where cidade = '".$cidade."'";
    $resultado = executaQuery($query);
    while($usuario = mysqli_fetch_assoc($resultado)){
        var_dump($usuario);
    }
}

function PesquisaUsuarioEmail($email){
    $query = "select * from  bd_projpalco.Usuario where email = '".$email."'";
    $resultado = executaQuery($query);
    return $resultado->fetch_assoc();
}

function executaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
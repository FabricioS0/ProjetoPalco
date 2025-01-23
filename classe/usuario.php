<?php

function CriarUsuario($nome, $email, $senha, $cpf, $cep, $rua, $bairro, $cidade){
    $query = "insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, CEP, Rua,Bairro, Cidade, DataCriacao)
    values('".$nome."', '".$email."', '".$senha."', '".$cpf."', '".$cep."', '".$rua."', '".$bairro."', '".$cidade."',  current_date());";
    $resultado = ExecutaQuery($query);
    return $resultado;
}

function PesquisaTodos(){
    $query = "select * from  bd_projpalco.Usuario";
    $resultado = executaQuery($query);
    // while($usuario = mysqli_fetch_assoc($resultado)){
    //     var_dump($usuario);
    // }
    return $resultado;
}

function PesquisaUsuarioId($id){
    $query = "select * from  bd_projpalco.Usuario where id = ".$id;
    $resultado = executaQuery($query);
    return $resultado->fetch_assoc();
}

function PesquisaUsuarioNome($nome){
    $query = "select * from  bd_projpalco.Usuario where nome = '".$nome."'";
    $resultado = executaQuery($query);
    return $resultado->fetch_assoc();
}

function PesquisaUsuarioEmail($email){
    $query = "select * from  bd_projpalco.Usuario where email = '".$email."'";
    $resultado = executaQuery($query);
    return $resultado->fetch_assoc();
}

function AtualizarUsuario($id, $nome, $email, $senha, $cpf, $cep, $rua, $bairro, $cidade){
    $query = "update bd_projpalco.Usuario set 
    Nome = '".$nome."'
    , Email = '".$email."'
    , Senha = ".$senha."
    , CPF = '".$cpf."'
    , CEP = '".$cep."'
    , Rua = '".$rua."'
    , Bairro = '".$bairro."'
    ., Cidade = '".$cidade."' 
    , DataModificacao = current_date() 
    where UsuarioID = ".$id;
}

function BloquearUsuario($id){
    $query = "update bd_projpalco.Usuario set Bloqueado = true where UsuarioID = ".$id;
    $resultado = executaQuery($query);
}

function DesbloquearUsuario($id){
    $query = "update bd_projpalco.Usuario set Bloqueado = false where UsuarioID = ".$id;
    $resultado = executaQuery($query);
}

function ExecutaQuery($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
<?php

function CriarUsuario($nome, $email, $senha, $cpf, $cep, $rua, $bairro, $cidade){
    $query = "insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, CEP, Rua,Bairro, Cidade, DataCriacao)
    values('".$nome."', '".$email."', '".$senha."', '".$cpf."', '".$cep."', '".$rua."', '".$bairro."', '".$cidade."',  current_date());";
    $resultado = ExecutaQuery($query);
    return $resultado;
}

function PesquisaTodosUsuarios(){
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
    , Cidade = '".$cidade."' 
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

function SetCookieUsuario($idUsuario){
    $cookie_name = "usuario";
    $cookie_value = $idUsuario;
    setcookie($cookie_name, $cookie_value, time() + (60 * 30), "/"); //30 minutos
}

function VerificaCookieLoginUsuario(){
    if(!isset($_COOKIE["usuario"])) {
        header('Location: '.'../html/Cadastro.html');
    } 
}

function UnsetCookieUsuario(){
    setcookie("usuario", "", time() - 3600);
}

function VerificaCookieAtivado(){
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
}
?>
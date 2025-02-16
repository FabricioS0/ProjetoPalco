<?php

function CriarUsuario($nome, $email, $senha, $cpf, $cep, $rua, $bairro, $cidade){
    $query = "insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, CEP, Rua,Bairro, Cidade, DataCriacao)
    values('".$nome."', '".$email."', '".$senha."', '".$cpf."', '".$cep."', '".$rua."', '".$bairro."', '".$cidade."',  current_date());";
    $resultado = ExecutaQueryUsuario($query);
    return $resultado;
}

function PesquisaTodosUsuarios(){
    $query = "select * from  bd_projpalco.Usuario";
    $resultado = ExecutaQueryUsuario($query);
    // while($usuario = mysqli_fetch_assoc($resultado)){
    //     var_dump($usuario);
    // }
    return $resultado;
}

function PesquisaUsuarioId($id){
    $query = "select * from  bd_projpalco.Usuario where UsuarioID = ".$id;
    $resultado = ExecutaQueryUsuario($query);
    return $resultado->fetch_assoc();
}

function PesquisaUsuarioNome($nome){
    $query = "select * from  bd_projpalco.Usuario where nome = '".$nome."'";
    $resultado = ExecutaQueryUsuario($query);
    return $resultado->fetch_assoc();
}

function PesquisaUsuarioEmail($email){
    $query = "select * from  bd_projpalco.Usuario where email = '".$email."'";
    $resultado = ExecutaQueryUsuario($query);
    return $resultado->fetch_assoc();
}

function AtualizarUsuario($id, $nome, $cep, $rua, $bairro, $cidade, $senha){
    $query = "update bd_projpalco.Usuario set 
    Nome = '".$nome."'
    , CEP = '".$cep."'
    , Rua = '".$rua."'
    , Bairro = '".$bairro."'
    , Cidade = '".$cidade."' 
    , Senha = '".$senha."'
    , DataModificacao = current_date() 
    where UsuarioID = ".$id;
}

function BloquearUsuario($id){
    $query = "update bd_projpalco.Usuario set Bloqueado = true where UsuarioID = ".$id;
    $resultado = ExecutaQueryUsuario($query);
}

function DesbloquearUsuario($id){
    $query = "update bd_projpalco.Usuario set Bloqueado = false where UsuarioID = ".$id;
    $resultado = ExecutaQueryUsuario($query);
}

function SetCookieUsuario($idUsuario){
    setcookie("usuario", $idUsuario, time() + (60 * 30), "/"); //30 minutos
}

function RetornaUsuarioLogadoCookie(){
    return $_COOKIE["usuario"];
}

function VerificaCookieLoginUsuario(){
    if(!isset($_COOKIE["usuario"])) {
        return false;
    } 
    return true;
}

function UnsetCookieUsuario(){
    setcookie("usuario", $idUsuario, time()-1000,"/");
}

function VerificaCookieAtivado(){
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
}

function ExecutaQueryUsuario($query){
    include('../conexao.php');
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
?>
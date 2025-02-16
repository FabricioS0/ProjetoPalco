<?php
include('../classe/usuario.php');

function VerificaRetornaUsuarioLogado(){
    if(!VerificaCookieLoginUsuario()){
        header('Location: '.'../html/login.php');
    }else{
        $usuario = PesquisaUsuarioId(RetornaUsuarioLogadoCookie());
        if($usuario == null){
            header('Location: '.'../html/login.php');
        }
        return $usuario;
    }
}

?>
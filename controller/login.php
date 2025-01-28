<?php
include('../classe/usuario.php');

if(isset($_POST)){
    extract($_POST);
    $usuario = PesquisaUsuarioEmail($email);
    $senhaHash = hash('md2', $senha);
    if($usuario != null){
        if($usuario["Bloqueado"] != true){
            if($usuario["Email"] == $email && $senhaHash == $usuario["Senha"]){
                //echo "Usuario validado!";
                SetCookieUsuario($usuario["UsuarioID"]);
                header('Location: '.'../html/pag_Perfil.html');
            }
            else{
                echo "Usuario não validado";
                header('Location: '.'../html/login.html');
            }
        }else{
            echo "Usuario Bloqueado";
            header('Location: '.'../html/login.html');
        }
    }else{
        echo "Usuario não encontrado";
        header('Location: '.'../html/login.html');
    }
}
?>
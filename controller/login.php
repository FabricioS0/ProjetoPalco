<?php
include('../classe/usuario.php');

if(isset($_POST)){
    extract($_POST);
    $usuario = PesquisaUsuarioEmail($email);
    $senhaHash = hash('md2', $senha);
    if($usuario != null){
        if($usuario["Bloqueado"] != true){
            if($usuario["Email"] == $email && $senhaHash == $usuario["Senha"]){
                echo "Usuario validado!";
            }
            else{
                echo "Usuario não validado";
            }
        }else{
            echo "Usuario Bloqueado";
        }
    }else{
        echo "Usuario não encontrado";
    }
}
?>
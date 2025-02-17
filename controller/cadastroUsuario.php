<?php
include('../classe/usuario.php');

if(isset($_POST)){
    extract($_POST);
    if($senha == $repetirSenha){
        $usuario = PesquisaUsuarioEmail($email);
        if($usuario == null){
            $senhaHash = hash('md2', $senha);
            CriarUsuario($nome, $email, $senhaHash, $cpf, $cep, $rua, $bairro, $cidade);
            $usuarioCriado = PesquisaUsuarioEmail($email);
            if($usuarioCriado != null){
                SetCookieUsuario($usuarioCriado["UsuarioID"]);
                header('Location: '.'../html/pag_Perfil.php');
            }else{
                echo "Usuário não cadastrado! Ocorreu algum erro";
                header('Location: '.'../html/Cadastro.php');
            }
        }else{
            echo "Esse email já está cadastrado";
            header('Location: '.'../html/Cadastro.php');
        }
    }else{
        echo "Senhas não são iguais!";
        header('Location: '.'../html/Cadastro.php');
    }
}
?>
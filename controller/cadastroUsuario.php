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
                //echo "Usuário cadastrado!";
                SetCookieUsuario($usuario["UsuarioID"]);
                header('Location: '.'../html/pag_Perfil.html');
            }else{
                echo "Usuário não cadastrado! Ocorreu algum erro";
                header('Location: '.'../html/Cadastro.html');
            }
        }else{
            echo "Esse email já está cadastrado";
            header('Location: '.'../html/Cadastro.html');
        }
    }else{
        echo "Senhas não são iguais!";
        header('Location: '.'../html/Cadastro.html');
    }
}
?>
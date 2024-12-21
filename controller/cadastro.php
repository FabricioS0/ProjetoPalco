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
            var_dump($usuarioCriado);
            if($usuarioCriado != null){
                echo "Usuário cadastrado!";
            }else{
                echo "Usuário não cadastrado! Ocorreu algum erro";
            }
        }else{
            echo "Esse email já está cadastrado";
        }
    }else{
        echo "Senhas não são iguais!";
    }
}
?>
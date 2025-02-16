<?php
include('../classe/usuario.php');
if(isset($_POST)){
    extract($_POST);
    if($senha == $repetirSenha){
        $senhaHash = hash('md2', $senha);
        AtualizarUsuario($id, $nome, $cep, $rua, $bairro, $cidade, $senha);
    }
}
?>
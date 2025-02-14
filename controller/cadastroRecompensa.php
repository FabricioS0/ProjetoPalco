<?php
include("../classe/recompensa.php");
include('../classe/usuario.php');


if(isset($_POST)){
    extract($_POST);
    VerificaCookieLoginUsuario();
    if($_GET['ProjetoId'] == null){
        header('Location: '.'../html/pag_Perfil.php');
    }else{
        $rs=CriarRecompensa($descricao, $valor, $_GET['ProjetoId']);
        header('Location: '.'../html/Cadastro_Projeto3.html?ProjetoId='.$_GET['ProjetoId']);
    }
}

?>
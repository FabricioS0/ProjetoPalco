<?php
include('../classe/recompensa.php');
include('../classe/usuario.php');
include('../classe/projeto.php');


if(isset($_POST)){
    extract($_POST);
    VerificaCookieLoginUsuario();
    if($_GET['ProjetoId'] == null){
        //header('Location: '.'../html/pag_Perfil.php');
    }else{    
        $projetosUsuario = PesquisaPorUsuario($_COOKIE["usuario"]);
        foreach($projetosUsuario as $projeto){
            $ultimoProjetoUsuario =  $projeto;
        }
        $rs=CriarRecompensa($descricao, $valor, $_GET['ProjetoId']);
        header('Location: '.'../html/Cadastro_Projeto3.php?ProjetoId='.$_GET['ProjetoId']);
    }
}

?>
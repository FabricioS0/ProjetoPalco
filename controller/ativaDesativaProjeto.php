<?php
include('../classe/projeto.php');
include('../classe/usuario.php');

var_dump($_GET['projetoId']);
if($_GET['projetoId'] == null){
    header('Location: '.'../html/home.php');
}else{
    $projeto = PesquisaPorId($_GET['projetoId']);
    if($projeto == null){
        header('Location: '.'../html/home.php');
    }
    if(RetornaUsuarioLogadoCookie() == null){
        header('Location: '.'../html/login.php');
    }
    if($projeto['UsuarioIDFK']!=RetornaUsuarioLogadoCookie()){
        header('Location: '.'../html/pag_Perfil.php');
    }
    if($projeto['Publico']==false){
        PublicarProjeto($projeto['ProjetoID']);
    }else{
        PrivarProjeto($projeto['ProjetoID']);
    }
    header('Location: '.'../html/Projeto_proprietario.php?projetoId='.$projeto['ProjetoID']);
}
?>
<?php
include('../classe/projeto.php');
include('../classe/usuario.php');

if(isset($_POST)){
    extract($_POST);
    VerificaCookieLoginUsuario();
    $rs=CriarProjeto($nome, $resumo, $valor, $datafim, $_COOKIE["usuario"]);
    header('Location: '.'../html/Cadastro_Projeto2.html?ProjetoId='.$_GET['ProjetoId']);
}
?>
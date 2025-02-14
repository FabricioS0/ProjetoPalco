<?php
include('../classe/projeto.php');
include('../classe/usuario.php');

if(isset($_POST)){
    extract($_POST);
    VerificaCookieLoginUsuario();
    $rs=CriarProjeto($nome, $resumo, $valor, $datafim, $_COOKIE["usuario"]);
    $projetosUsuario = PesquisaPorUsuario($_COOKIE["usuario"]);
    foreach($projetosUsuario as $projeto){
        $ultimoProjetoUsuario =  $projeto;
    }
    header('Location: '.'../html/Cadastro_Projeto2.php?ProjetoId='.$ultimoProjetoUsuario['ProjetoID']);
}
?>
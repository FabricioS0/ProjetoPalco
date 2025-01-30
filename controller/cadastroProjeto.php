<?php
include('../classe/projeto.php');

if(isset($_POST)){
    extract($_POST);
    if(!isset($_COOKIE["usuario"])) {
        header('Location: '.'../html/Cadastro.html');
    } else {
        $rs=CriarProjeto($nome, $resumo, $valor, $datafim, $_COOKIE["usuario"]);
        header('Location: '.'../html/Cadastro_Projeto2.html');
    }
}
?>
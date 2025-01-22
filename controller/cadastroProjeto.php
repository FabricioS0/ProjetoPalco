<?php
include('../classe/projeto.php');

if(isset($_POST)){
    extract($_POST);
    $rs=CriarProjeto($nome, $resumo, $valor, $datafim, 1);
    header('Location: '.'../html/Cadastro_Projeto2.html');
}
?>
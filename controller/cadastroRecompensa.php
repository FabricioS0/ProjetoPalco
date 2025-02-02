<?php
include("../classe/recompensa.php");
include('../classe/usuario.php');


if(isset($_POST)){
    extract($_POST);
    VerificaCookieLoginUsuario();
    $rs=CriarRecompensa($descricao, $valor, 1);
    header('Location: '.'../html/Cadastro_Projeto3.html');
}

?>
<?php
include("../classe/recompensa.php");


if(isset($_POST)){
    extract($_POST);
    $rs=CriarRecompensa($descricao, $valor, 1);
    // header('Location: '.'../html/Cadastro_Projeto2.html');
}

?>
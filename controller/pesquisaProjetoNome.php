<?php
include('../classe/projeto.php');

if(isset($_POST)){
    extract($_POST);
    if($nome != null){
        header('Location: '.'../html/Projetos.php?nome='.$nome);
    }else{
        header('Location: '.'../html/Projetos.php');
    }
}
?>
<?php
if(!isset($_COOKIE["usuario"])) {
    echo "Usuario não logado";
    //header('Location: '.'../html/Cadastro.html');
} else {
    echo "Usuario logado";
    //header('Location: '.'../html/Cadastro_Projeto2.html');
}
?>
<?php
include('../controller/perfil.php');
$usuario = RetornaUsuarioLogado();
$projetosUsuario = PesquisaProjetosPorUsuario($usuario['UsuarioID']);
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/Style_Perfil.css">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
    <div class="header">
        <p>Boas Vindas!</p>
        <a href="../controller/deslogar.php" id="sair">SAIR</a>
    </div>
    <div class="perfil">
        <p id="nome_pessoa">'.$usuario['Nome'].'</p>
        <a href="#" id="edicao">editar perfil</a>
    </div>
    <div class="body_perfil">
        <a href="#Ativos">ATIVOS</a>
        <a href="#Concluidos">CONCLUIDOS</a>
        <a href="#Desativados">DESATIVADOS</a>
    </div>
    <a href="Cadastro_Projeto1.html" class="novoprojeto">NOVO PROJETO</a>
    <div class="container-projetos">';
        foreach($projetosUsuario as $projeto){
            echo '
        <div class="projeto">
            <img src="/ProjetoPalco/Style/Imgs/img_projeto.jpg" alt="" width="300px">
            <h1>'.$projeto['Nome'].'</h1>
            <p>'.$projeto['Resumo'].'</p>
            <div class="valores">
                <p>'.$projeto['ValorMeta'].'</p>
                <p> Termina em: '.$projeto['DataFim'].'</p>
            </div>
        </div>';
        }
        echo '
    </div>
    <div class="footer">
        <div class="LadoEsquerdo"><img src="../Style/Imgs/Logo.png" alt="" id="img_footer"></div>
        
        <div class="LadoDireito">
          <h1>Siga nossas redes Sociais</h1>
            <a href="Insta" id="link">Instagram</a>
            <a href="youtube" id="link">Youtube</a>
            <a href="Facebook" id="link">Facebook</a>
        </div>  
    </div>
    </div>
</body>
</html>';
?>
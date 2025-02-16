<?php
include('../controller/home.php');

$projetos = PesquisaTodosProjetos();

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/cabecalho&header.css">
    <link rel="stylesheet" href="/ProjetoPalco/Style/home.css">
    <title>Projeto Palco</title>
</head>
<body>
    <header class="content-top">
        <img src="/ProjetoPalco/Style/Imgs/Logo.png" alt="">
        <div class="buttons-cabecalho">
            <a href="home.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-casa-50 (1).png" alt=""> Início</button></a>
            <a href="Projetos.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-musical-50.png" alt=""> Projetos</button></a>
            <a href="#QuemSomos"><button> <img src="/ProjetoPalco/Style/Imgs/icons8-informação-30.png" alt=""> Quem somos</button></a>
        </div>
        <form action="" class="search-container">
          <input type="text" placeholder="Busca" class="search-input">
          <button class="search-button">🔍</button>
        </form>';
            if(VerificaLogado()){
                echo '<a href="pag_Perfil.php"><button class="conta">PERFIL</button></a>';
            }else{
                echo '<a href="login.html"><button class="conta">LOGIN</button></a>';
            }
        echo '
    </header>
    <div class="eventResume">
        <h1>Evento X</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod quia eos perferendis ipsum sapiente distinctio unde sit!</p>
        <a href=""><button class="botaoEvent">Ver evento</button></a>
    </div>
      <div class="projetos-destaque">
        <h1>Confira os projetos que estão bombando!</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, mollitia! Aut, nobis! Odit, nihil. </p>
    </div>
        <div class="container-projetos">';
        foreach($projetos as $projeto){
            echo '
            <a href="Projeto.php?projetoId='; echo $projeto['ProjetoID']; echo '" style="text-decoration: none; color: inherit;">
                <div class="projeto">';
                    $image = pesquisarPrimeriaImagem($projeto['ProjetoID']);
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($image['Arquivo']).'" alt="Foto do projeto" style="height:250px">
                    <h1>'.$projeto['Nome'].'</h1>
                    <p>'.$projeto['Resumo'].'</p>
                    <div class="valores">
                        <p>'.$projeto['ValorMeta'].'</p>
                        <p>Termina em: '.$projeto['DataFim'].'</p>
                    </div>
                </div>
            </a>';
        }        
        echo '</div>
    </div>  
    <div class="quemSomos" id="QuemSomos">
        <div class="container-area">
        <h2>Quem somos e como trabalhamos?</h2>
            <h3>Somos uma plataforma dedicada a conectar projetos e eventos com pessoas interessadas em apoiá-las</h3>
                    <p>Nosso objetivo é ajudar você a transformar suas ideias em
                    realidade. Ao cadastrar seu projeto conosco, ele será apresentado
                    ao nosso público, aumentando sua visibilidade e atraindo os apoios
                    necessários, aumentando as chances de sucesso.</p>
                    <div class="botoesSomos"></div>
                <a href="Cadastro_Projeto1.html"><button class="divulProj"><b>DIVULGUE SEU PROJETO</b></button></a>           
            <a href="Quem_Somos.html"><button class="VerMais"><b>VER MAIS</b></button></a> 
        </div>
    </div>
    <div class="EventDestaque">
        <h2>Afim de sair? Confira nossa agenda cultura</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint nihil aperiam fugit id et optio mollitia, expedita reiciendis voluptatem nobis.</p>
    </div>
        <div class="eventosCult">
            <div class="evento">
                <img src="/ProjetoPalco/Style/Imgs/img_projeto.jpg" alt="">
                <h1>Evento X</h1>
                <p>Donec et mi ante. Vivamus sem risus, 
                bibendum eget metus a, posuere auctor 
                orci.</p>
        <div class="LocData">
            <p>Porto Seguro - BA</p>
            <p>15/04/2025</p>
        </div>
    </div>
</div>
    <footer class="footer" >
        <div class="LadoEsquerdo"><img src="../Style/Imgs/Logo.png" alt="" id="img_footer"></div>
        <div class="LadoDireito">
          <h1>Siga nossas redes Sociais</h1>
            <a href="Insta" id="link">Instagram</a>
            <a href="youtube" id="link">Youtube</a>
            <a href="Facebook" id="link">Facebook</a>
        </div>  
    </footer>
</body>
</html>';
?>
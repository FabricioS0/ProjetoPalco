<?php

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
        </form>
        <a href=""><button class="conta">CONTA</button></a>
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
        <div class="container-projetos">
            <div class="projeto">
                <img src="/ProjetoPalco/Style/Imgs/img_projeto.jpg" alt="">
                <h1>Projeto X</h1>
                <p>Donec et mi ante. Vivamus sem risus, 
                    bibendum eget metus a, posuere auctor 
                    orci.
                </p>
                <div class="valores">
                    <p>R$100,00</p>
                    <p>Termina em: 12/12/2004</p>
                </div>
        </div>
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
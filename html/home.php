<?php
include('../controller/home.php');

$projetos = PesquisaTodosProjetos();
$eventos = PesquisarEventos();

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
            <a href="home.php"><button><img src="/Style/Imgs/icons8-casa-50.png" alt=""> Início</button></a>
            <a href="Projetos.php"><button><img src="/Style/Imgs/icons8-informação-50.png" alt=""> Projetos</button></a>
            <a href="#QuemSomos"><button> <img src="/Style/Imgs/icons8-musical-24.png" alt=""> Quem somos</button></a>
        </div>
        <form action="" class="search-container">
          <input type="text" placeholder="Busca" class="search-input">
          <button class="search-button">🔍</button>
        </form>';
            if(VerificaLogado()){
                echo '<a href="pag_Perfil.php"><button class="conta">PERFIL</button></a>';
            }else{
                echo '<a href="login.php"><button class="conta">LOGIN</button></a>';
            }
        echo '
    </header>';
        if($eventos!=null){
            foreach($eventos as $evento){
                $eventoDestaque = $evento;
                break;
            }
            $imagemDestaque = $eventoDestaque['Imagem'];
            echo '
            <div class="eventResume" style="background-image: url(data:image/jpeg;base64,'.base64_encode($imagemDestaque).')">
                <h1>'.$eventoDestaque['Nome'].'</h1>
                <p>'.$eventoDestaque['Descricao'].'</p>
                <a href="'.$eventoDestaque['URL'].'"><button class="botaoEvent">Ver evento</button></a>
            </div>';
        }
        echo'
      <div class="projetos-destaque">
        <h1>Confira os projetos que estão bombando!</h1>
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
                <a href="Cadastro_Projeto1.php"><button class="divulProj"><b>DIVULGUE SEU PROJETO</b></button></a>           
        </div>
    </div>
    <div id="EventDestaque">
        <h2>Afim de sair? Confira nossa agenda cultura</h2>
    </div>
        <div class="eventosCult">';
        if($eventos!=null){
            foreach($eventos as $evento){
                echo '
                <a href="'; echo $evento['URL']; echo '" style="text-decoration: none; color: inherit;">
                <div class="evento">';
                        $image = $evento['Imagem'];
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="Foto do evento" style="height:250px">
                        <h1>'.$evento['Nome'].'</h1>
                        <p>'.$evento['Descricao'].'</p>
                        <div class="LocData">
                            <p>'.$evento['LocalDescricao']; echo '</p>
                            <p>'.$evento['DataEvento']; echo '</p>
                        </div>
                    </div>
                </a>';
            }        
        }
        echo '
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
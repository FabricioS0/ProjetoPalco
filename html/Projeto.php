<?php
include('../controller/projeto.php');

if($_GET['projetoId']==null){
    header('Location: '.'../html/home.php');
}

$projeto = pesquisarProjeto($_GET['projetoId']);
if($projeto == null){
    header('Location: '.'../html/home.php');
}

$recompensas = PesquisarRecompensas($projeto['ProjetoID']);
$midias = PesquisarMidias($projeto['ProjetoID']);
$usuario = RetornaUsuarioProjeto($projeto['UsuarioIDFK']);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/Style_prog_proprietario.css">
    <link rel="stylesheet" href="/ProjetoPalco/Style/cabecalho&header.css">
    <title>Projeto Proprietario</title>
</head>
<body>
    <header class="content-top">
        <a href="home.php"><img src="/ProjetoPalco/Style/Imgs/Logo.png" alt=""></a>
        <div class="buttons-cabecalho">
            <a href="home.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-casa-50.png" alt=""> Início</button></a>
            <a href="Projetos.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-informação-50.png" alt=""> Projetos</button></a>
            <a href="#QuemSomos"><button> <img src="/ProjetoPalco/Style/Imgs/icons8-musical-24.png" alt=""> Quem somos</button></a>
        </div>
        <form action="" class="search-container">
          <input type="text" placeholder="Busca" class="search-input">
          <button class="search-button">
            🔍
          </button>
        </form>';
        if(VerificaLogado()){
            echo '<a href="pag_Perfil.php"><button class="conta">PERFIL</button></a>';
        }else{
            echo '<a href="login.php"><button class="conta">LOGIN</button></a>';
        }
    echo '
    </header>
    <div class="Container">
        <button class="row_back"><a href="./pag_Perfil.php">←</a></button>
        <div class="topo">
            <div id="lado-esquerdo">';
                if($midias!=null){
                    foreach($midias as $midia){
                        if($midia['TipoArquivo']=='image'){
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($midia['Arquivo']).'" alt="Foto do projeto" class="imagem-projeto">';
                            break;
                        }
                    }
                }
            echo '</div>
            <div id="lado-direito">
                <h2 id="titulo_projeto">'.$projeto['Nome'].'</h2>
                <p id="descricao_projeto">'.$projeto['Resumo'].'</p>
                <p id="">[imagem]-'.$usuario['Nome'].'</p>
                <p id="metas">Meta: '.$projeto['ValorMeta'].'</p>
                <p id="Data_projeto">Data de término: '.$projeto['DataFim'].'</p>
            </div>
        </div>
        <h1>Recompensa</h1>
        <div class="recompensa-container">';
            if($recompensas!=null){
                foreach($recompensas as $recompensa){
                    echo '
                    <div class="recompensa">
                        <p>'.$recompensa['Descricao'].'</p>
                        <div class="valores">
                            <p>Valor:'.$recompensa['Valor'].'</p>
                        </div>
                    </div>';
                }
            }
            echo '
        </div>
        
        <section id="sobre" class="sobre-container">
            <div class="sobre-texto">
              <h2>Sobre o projeto</h2>
              <p>'.$projeto['Descricao'].'</p>
            </div>';
              echo '
              <div class="imagens">';
              if($midias!=null){
                foreach($midias as $midia){
                    if($midia['TipoArquivo']=='image'){
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($midia['Arquivo']) . '" alt="'.$midia['Descricao'].'">';
                    }
                    if($midia['TipoArquivo']=='video'){
                        echo '<div content="Content-Type: video/mp4">
                                <video width="700" height="450" controls="controls" poster="image" preload="metadata">
                                <source src="data:video/mp4;base64,'.base64_encode($midia['Arquivo']).'" alt="'.$midia['Descricao'].'"/>;
                            </video>
                        </div>';
                    }
                }
              }
                echo '
          </section>
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
</body>
</html>';
?>
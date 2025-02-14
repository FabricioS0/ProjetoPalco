<?php
include('../controller/projetoProprietario.php');

$projeto = PesquisaDadosProjeto($_GET['projetoId']);
if($projeto == null){
    header('Location: '.'../html/home.html');
}
$recompensas = PesquisarRecompensas($projeto['ProjetoID']);
$midias = PesquisarMidias($projeto['ProjetoID']);

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
    
    <div class="Container">
        <button class="row_back"><a href="./pag_Perfil.html">←</a></button>
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
                <p id="metas">Meta: '.$projeto['ValorMeta'].'</p>
                <p id="Data_projeto">Data de término: '.$projeto['DataFim'].'</p>
            </div>
        </div>
        <div class="recompensa">
            <h1>Recompensa</h1>
            ';
                if($recompensas!=null){
                    foreach($recompensas as $recompensa){
                        echo 'Decrição: '.$recompensa['Descricao'].'/ Valor: '.$recompensa['Valor'];
                    }
                }
            echo '
        </div>
        
        <section id="sobre" class="sobre-container">
            <div class="sobre-texto">
              <h2>Sobre o projeto</h2>
              <p>
                '.$projeto['Descricao'].'
              </p>
            </div>;';
          
            // <div class="sobre-midia">
            //   <div class="video">
            //     <iframe src="https://www.youtube.com/embed/SEU_VIDEO_ID" 
            //       title="Vídeo sobre o Projeto Palco" 
            //       frameborder="0" 
            //       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            //       allowfullscreen>
            //     </iframe>
            //   </div>
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
              </div>
            </div>
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
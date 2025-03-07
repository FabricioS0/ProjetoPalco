<?php
include('../controller/projetos.php');

$projetos = pesquisarProjetos();

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/Projetos.css">
    <link rel="stylesheet" href="/ProjetoPalco/Style/cabecalho&header.css">
    <title>Document</title>
</head>
<body>
    <header class="content-top" Style="background-color: #095169;
    display: flex;
    justify-content: space-between;
    padding-top: 15px;
    padding-bottom: 15px;>
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
        <h1>Ajude em um projeto e ganhe <br> recompensas incríveis!</h1>
        <div class="projetos-destaque">
            <h2>Em destaque:</h2>
            <div class="container-projetos">';
                    foreach($projetos as $projeto){
                        echo '
                        <a href="Projeto.php?projetoId='; echo $projeto['ProjetoID']; echo '" style="text-decoration: none; color: inherit;">
                            <div class="projeto">';
                                $image = pesquisarPrimeriaImagem($projeto['ProjetoID']);
                                echo '<img src="data:image/jpeg;base64,'.base64_encode($image['Arquivo']).'" alt="Foto do projeto" class="imagem-projeto">
                                <h1>'.$projeto['Nome'].'</h1>
                                <p>'.$projeto['Resumo'].'</p>
                                <div class="valores">
                                    <p>'.$projeto['ValorMeta'].'</p>
                                    <p>Termina em: '.$projeto['DataFim'].'</p>
                                </div>
                            </div>
                        </a>';
                    }
                echo '
            </div>
            <hr style="border: none; height: 1px; background-color: #9FD86B;">
        </div>
        <div class="projetos">
            <h1>Todos os projetos:</h1>
            <form action="../controller/pesquisaProjetoNome.php" method="post" class="busca">
                <label for="nome">nome do projeto <br><input type="text" name="nome" id="nome"></label>
                
                <!-- <label for="categoria">Categoria <br>
                    <select name="" id="categoria">
                        <option value="" disabled selected>Selecione</option>
                        <option value="op1">Opção 1</option>
                        <option value="op2">Opção 2</option>
                        <option value="op3">Opção 3</option>
                    </select>
                </label>-->
                
                <button type="submit">BUSCAR</button>
            </form>
            <div class="container-projetos">
                <div class="projeto">

                </div>
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
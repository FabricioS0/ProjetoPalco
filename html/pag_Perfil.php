<?php
include('../controller/perfil.php');
$usuario = RetornaUsuarioLogado();
$projetosUsuario = PesquisaProjetosPorUsuario($usuario['UsuarioID']);
echo '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Style_Perfil.css">
    <link rel="stylesheet" href="/ProjetoPalco/Style/cabecalho&header.css">
    <title>Perfil</title>
</head>
<body>
        <header class="content-top" Style="background-color: #095169;
    display: flex;
    justify-content: space-between;
    padding-top: 15px;
    padding-bottom: 15px;>
            <a href="home.php"><img src="/ProjetoPalco/Style/Imgs/Logo.png" alt=""></a>
            <div class="buttons-cabecalho">
                <a href="home.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-casa-50 (1).png" alt=""> Início</button></a>
                <a href="Projetos.php"><button><img src="/ProjetoPalco/Style/Imgs/icons8-musical-50.png" alt=""> Projetos</button></a>
                <a href="home.php#QuemSomos"><button> <img src="/ProjetoPalco/Style/Imgs/icons8-informação-30.png" alt=""> Quem somos</button></a>
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
        <div class="header">
            <p>Boas Vindas!</p>
            <a href="../controller/deslogar.php" id="sair">SAIR</a>
        </div>
        <div class="perfil">
            <p id="nome_pessoa">'; echo $usuario['Nome']; echo '</p>
            <a href="alteraUsuario.php" id="edicao">Editar Perfil</a>
        </div>
        <div class="body_perfil">
            <a href="#Ativos">ATIVOS</a>
            <a href="#Concluidos">CONCLUÍDOS</a>
            <a href="#Desativados">DESATIVADOS</a>
        </div>
        <a href="Cadastro_Projeto1.php" class="novoprojeto">NOVO PROJETO</a>
        <!-- container projeto  -->
        <div style="  display: grid;
            grid-template-columns: repeat(3, 1fr); 
            justify-items: center;
            margin-bottom: 80px;
            margin-top: 80px;">';
            foreach ($projetosUsuario as $projeto){
                echo '<!-- projeto -->
                <a href="Projeto_proprietario.php?projetoId='; echo $projeto['ProjetoID']; echo '" style="text-decoration: none; color: inherit;">
                    <div style="width: 350px; 
                        height: 450px;
                        background: white;
                        border-radius: 10px;
                        padding: 20px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                        ">';
                                $image = pesquisarPrimeriaImagem($projeto['ProjetoID']);
                                echo '<img src="data:image/jpeg;base64,'.base64_encode($image['Arquivo']).'" alt="Foto do projeto" class="imagem-projeto" style="width:350px;height:250px">';
                        echo '  
                        <h1>'; echo $projeto['Nome']; echo '</h1>
                        <p>'; echo $projeto['Resumo']; echo '</p>
                        <div class="valores">
                            <p>R$'; echo number_format($projeto['ValorMeta'], 2, ',', '.'); echo '</p>
                            <p>Termina em:'; echo $projeto['DataFim']; echo '</p>
                        </div>
                    </div>
                </a>';
            }
        echo '</div>
        <div class="footer">
            <div class="LadoEsquerdo">
                <img src="../Style/Imgs/Logo.png" alt="Logo" id="img_footer">
            </div>
            <div class="LadoDireito">
                <h1>Siga nossas redes sociais</h1>
                <a href="https://instagram.com" target="_blank" class="link">Instagram</a>
                <a href="https://youtube.com" target="_blank" class="link">YouTube</a>
                <a href="https://facebook.com" target="_blank" class="link">Facebook</a>
            </div>
        </div>
</body>
</html>';
?>
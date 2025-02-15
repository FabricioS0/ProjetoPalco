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
    <title>Perfil</title>
</head>
<body>
        <div class="header">
            <p>Boas Vindas!</p>
            <a href="../controller/deslogar.php" id="sair">SAIR</a>
        </div>
        <div class="perfil">
            <p id="nome_pessoa">'; echo $usuario['Nome']; echo '</p>
            <a href="#" id="edicao">Editar Perfil</a>
        </div>
        <div class="body_perfil">
            <a href="#Ativos">ATIVOS</a>
            <a href="#Concluidos">CONCLUÍDOS</a>
            <a href="#Desativados">DESATIVADOS</a>
        </div>
        <a href="Cadastro_Projeto1.html" class="novoprojeto">NOVO PROJETO</a>
        <!-- container projeto  -->
        <div style="  display: grid;
            grid-template-columns: repeat(3, 1fr); 
            justify-items: center;
            margin-bottom: 80px;
            margin-top: 80px;">';
            foreach ($projetosUsuario as $projeto){
                echo '<!-- projeto -->
                <a href="Projeto.php?projetoId='; echo $projeto['ProjetoID']; echo '" style="text-decoration: none; color: inherit;">
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
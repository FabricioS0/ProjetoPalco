<?php
include('../controller/perfil.php');
$usuario = RetornaUsuarioLogado();
$projetosUsuario = PesquisaProjetosPorUsuario($usuario['UsuarioID']);
?>
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
            <p id="nome_pessoa"><?php echo htmlspecialchars($usuario['Nome']); ?></p>
            <a href="#" id="edicao">Editar Perfil</a>
        </div>
        <div class="body_perfil">
            <a href="#Ativos">ATIVOS</a>
            <a href="#Concluidos">CONCLUÍDOS</a>
            <a href="#Desativados">DESATIVADOS</a>
        </div>
        <a href="Cadastro_Projeto1.html" class="novoprojeto">NOVO PROJETO</a>
        <div style="  display: grid;
            grid-template-columns: repeat(3, 1fr); 
            justify-items: center;
            margin-bottom: 80px;
            margin-top: 80px;">
            <?php foreach ($projetosUsuario as $projeto): ?>
                <div style="width: 350px;
                    height: 450px;
                    background: white;
                    border-radius: 10px;
                    padding: 20px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                    ">
                    <img src="../Style/Imgs/img_projeto.jpg" style="width:350px;height:250px">
                    <h1><?php echo htmlspecialchars($projeto['Nome']); ?></h1>
                    <p><?php echo htmlspecialchars($projeto['Resumo']); ?></p>
                    <div class="valores">
                        <p>R$ <?php echo number_format($projeto['ValorMeta'], 2, ',', '.'); ?></p>
                        <p>Termina em: <?php echo htmlspecialchars($projeto['DataFim']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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
</html>
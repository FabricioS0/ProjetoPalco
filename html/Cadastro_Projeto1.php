<?php
include('../classe/usuario.php');

if(!VerificaCookieLoginUsuario()){
    header('Location: '.'../html/login.php');
}

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Style_Cadastro_Projeto.css">
    <script src="../Stripts/script_cadastro_projeto.JS"></script>
    <title>Cadastro de projeto</title>
</head>
<body>
    <div class="Container"> 
            <p><button class="row_back">←</button><b>Cadastrar projeto</p>
            <div class="progress-bar">
                <div class="step active"></div>
                <div class="step"></div>
                <div class="step"></div>
            </div>
            <h1>Do que se trata o projeto?</h1>
            <div class="envio_imagem">
                <label for="file_input" class="imagem-preencher">
                    <img src="../Style/Imgs/adicionar-foto.png" alt="Adicionar Foto" class="camera_icon">
                </label>
                <input type="file" id="file_input" name="foto" accept="image/*">
            </div>
        <div class="forms">
            <form action="../controller/cadastroProjeto.php" method="post">
                <div class="form_group">
                    <label for="name">Nome do projeto<input type="text" name="nome" id="nome" required></label>
                    
                    <label for="valor">De quanto precisa?<input type="number" name="valor" id="valor" oninput="moedaFormat2()" placeholder="0,00" required></label>
                </div>

                <div class="form_group">
                    <label for="Data">Quando termina?<input type="date" name="datafim" id="datafim" required></label>
                                        
                    <label for="Resumo">Resumo do projeto<input type="text" name="resumo" id="resumo" maxlength="500" required></label>
                </div>
                <div class="MaxCaracteres"><p>500 caracteres disponíveis</p></div>
                <button type="submit" class="submit_button">Avançar</button>
            </form>
        </div>
    </div>
</body>
</html>';
?>
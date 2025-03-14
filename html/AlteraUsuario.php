<?php
include('../controller/alteraUsuario.php');

$usuario = VerificaRetornaUsuarioLogado();

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/Style_Cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="Container">
        <p><button class="row_back"><a href="pag_Perfil.php">←</button></a>Página de Perfil</p>
        <h1>Altere os dados do seu usuario.</h1>
        <div class="forms">
            <form action="../controller/editaUsuario.php" method="post" enctype="multipart/form-data">
                <div class="envio_imagem">
                    <label for="file_input" class="imagem-preencher">
                        <img src="../Style/Imgs/adicionar-foto.png" alt="Adicionar Foto" class="camera_icon">
                    </label>
                    <input type="file" id="file_input" name="foto" accept="image/*">
                </div>
                <div class="form_group">
                    <label for="name">Nome completo<input type="text" name="nome" id="nome" required value="'.$usuario['Nome'].'"></label>
                    <label for="Rua">Rua<input type="text" name="rua" id="rua" value="'.$usuario['Rua'].'"></label>
                </div>
                <div class="form_group">
                    <label for="Bairro">Bairro<input type="text" name="bairro" id="bairro" value="'.$usuario['Bairro'].'"></label>
                    <label for="Cidade">Cidade<input type="text" name="cidade" id="cidade" value="'.$usuario['Cidade'].'"></label>
                    <label for="Cep">Cep<input type="text" name="cep" id="cep" value="'.$usuario['CEP'].'"></label>
                </div>
                <div class="form_group">
                    <label for="senha">Senha<input type="password" id="senha" name="senha" 
                    title="A senha deve ter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números."></label>
                    <label for="repetirSenha">Repetir Senha<input type="password" id="repetirSenha" name="repetirSenha" 
                    title="A senha deve ter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números.">  </label>
                </div>
                <button type="submit" class="submit_button">EDITAR</button>
            </form>
        </div>

    </div>
</body>
<script src="../Stripts/Stripts_Cadastro.js"></script>
</html>';
?>
<?php

include('../classe/usuario.php');

if(VerificaCookieLoginUsuario()){
    header('Location: '.'../html/pag_Perfil.php');
}

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
        <p><button class="row_back"><a href="login.php">←</button></a>Login</p>
        <h1>Se apresente para a gente.</h1>
        <div class="forms">
            <form action="../controller/cadastroUsuario.php" method="post" enctype="multipart/form-data">
                <div class="envio_imagem">
                    <label for="file_input" class="imagem-preencher">
                        <img src="../Style/Imgs/adicionar-foto.png" alt="Adicionar Foto" class="camera_icon">
                    </label>
                    <input type="file" id="file_input" name="foto" accept="image/*">
                </div>
                <div class="form_group">
                    <label for="name">Nome completo<input type="text" name="nome" id="nome" required></label>                    
                    <label for="CPF">CPF<input type="text" name="cpf" id="cpf" required></label>                    
                    <label for="Rua">Rua<input type="text" name="rua" id="rua"></label>                    
                </div>
                <div class="form_group">
                    <label for="Bairro">Bairro<input type="text" name="bairro" id="bairro"></label>                                        
                    <label for="Cidade">Cidade<input type="text" name="cidade" id="cidade"></label>                    
                    <label for="Cep">Cep<input type="text" name="cep" id="cep"></label>                    
                </div>
                <div class="form_group">
                    <label for="email">Email<input type="email" name="email" id="email"></label> 
                    <label for="senha">Senha<input type="password" id="senha" name="senha" 
                    title="A senha deve ter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números."></label>
                    <label for="repetirSenha">Repetir Senha<input type="password" id="repetirSenha" name="repetirSenha" 
                    title="A senha deve ter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas e números.">  </label>
                </div>
                <button type="submit" class="submit_button">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>
<script src="../Stripts/Stripts_Cadastro.js"></script>
</html>';
?>